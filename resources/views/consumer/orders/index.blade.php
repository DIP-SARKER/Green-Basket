@extends('index')
@push('style')
<title>My orders</title>
@endpush
@section('title', 'My Orders')

@section('main-content')
<div class="container mx-auto py-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">My Orders</h2>

    @if ($orders->isEmpty())
        <p class="text-gray-600">You haven't placed any orders yet.</p>
    @else
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-100 text-gray-700">
                    <tr>
                        <th class="px-4 py-2">Order ID</th>
                        <th class="px-4 py-2">Date</th>
                        <th class="px-4 py-2">Total</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Details</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr class="border-t">
                            <td class="px-4 py-2">#{{ $order->id }}</td>
                            <td class="px-4 py-2">{{ $order->created_at->format('d M Y') }}</td>
                            <td class="px-4 py-2">৳{{ number_format($order->total_price, 2) }}</td>
                            <td class="px-4 py-2 capitalize">{{ $order->status }}</td>
                            <td class="px-4 py-2">
                                <a href="{{ route('orders.show', $order->id) }}"
                                   class="text-blue-600 hover:underline">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
