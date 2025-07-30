<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use App\Models\Order;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class PaymentController extends Controller
{


    public function payNow(Request $request, $orderId)
    {
        $customer = Auth::guard('customer')->user();

        $order = Order::with('orderItems.product')
            ->where('id', $orderId)
            ->where('customer_id', $customer->id)
            ->where('status', 'pending') // ensure it's not paid already
            ->firstOrFail();

        $totalAmount = $order->total_price;

        $productNames = $order->orderItems->map(function ($item) {
            return $item->product->name;
        })->toArray();

        $transactionId = (string) Str::uuid();

        // ✅ Save transaction info in order
        $order->update([
            'transaction_id' => $transactionId,
        ]);

        

        // ✅ Prepare SSLCommerz data
        $post_data = [
            'store_id' => env('SSLCZ_STORE_ID'),
            'store_passwd' => env('SSLCZ_STORE_PASSWORD'),
            'total_amount' => $totalAmount,
            'currency' => "BDT",
            'tran_id' => $transactionId,

            'success_url' => route('payment.success'),
            'fail_url' => route('payment.fail'),
            'cancel_url' => route('payment.cancel'),

            'cus_name' => $customer->name,
            'cus_email' => $customer->email,
            'cus_add1' => $customer->address ?? 'Dhaka',
            'cus_city' => "Dhaka",
            'cus_postcode' => "1207",
            'cus_country' => "Bangladesh",
            'cus_phone' => $customer->phone ?? '01700000000',

            'shipping_method' => "Courier",
            'product_name' => implode(', ', $productNames),
            'product_category' => "Mixed",
            'product_profile' => "general",
        ];

        $api_url = "https://sandbox.sslcommerz.com/gwprocess/v3/api.php";

        $response = Http::withOptions([
            'verify' => false
        ])->asForm()->post($api_url, $post_data);

        $result = $response->json();

        if (isset($result['GatewayPageURL']) && $result['GatewayPageURL'] != "") {
            return redirect($result['GatewayPageURL']);
        } else {
            return response()->json(['error' => $result['failedreason'] ?? 'Payment request failed.']);
        }
    }



    public function success(Request $request)
    {

        \Log::info('Payment success hit', $request->all());

        if ($request->isMethod('post') && $request->input('status') === 'VALID') {
            $transactionId = $request->input('tran_id');

            // Find the order by transaction ID
            $order = Order::where('transaction_id', $transactionId)->first();

            if ($order) {
                $order->update([
                    'status' => 'paid',
                    'payment_details' => json_encode($request->all()) // Optional: log full response
                ]);

                return redirect()->route('orders.index')->with('success', 'Payment successful!');
            }

            return redirect()->route('orders.index')->with('error', 'Order not found for this transaction.');
        }

        return redirect()->route('orders.index')->with('error', 'Invalid payment access.');
    }

    public function fail(Request $request)
    {
        return "Payment failed!";
    }

    public function cancel(Request $request)
    {
        return "Payment was cancelled!";
    }
}
