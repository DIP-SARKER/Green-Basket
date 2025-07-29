@extends('index')
@push('style')
<title>Order Details</title>
@endpush

@section('main-content')
<div class="container mx-auto py-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Order #{{ $order->id }}</h2>

    <div class="mb-6">
        <p><strong>Date:</strong> {{ $order->created_at->format('d M Y, h:i A') }}</p>
        <p><strong>Status:</strong> <span class="capitalize">{{ $order->status }}</span></p>
        <p><strong>Total:</strong> ৳{{ number_format($order->total_price, 2) }}</p>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="px-4 py-2">Product</th>
                    <th class="px-4 py-2">Quantity</th>
                    <th class="px-4 py-2">Unit Price</th>
                    <th class="px-4 py-2">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->orderItems as $item)
                    <tr class="border-t">
                        <td class="px-4 py-2">{{ $item->product->name ?? 'Deleted Product' }}</td>
                        <td class="px-4 py-2">{{ $item->quantity }}</td>
                        <td class="px-4 py-2">৳{{ number_format($item->price_at_purchase, 2) }}</td>
                        <td class="px-4 py-2">৳{{ number_format($item->price_at_purchase * $item->quantity, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        <a href="{{ route('orders.index') }}" class="text-blue-600 hover:underline">&larr; Back to Orders</a>
    </div>
</div>
@endsection
