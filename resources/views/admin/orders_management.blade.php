@extends('admin.dashboard')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/dip/orders_management.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
@endpush

@push('title')
    <h1>Orders Management</h1>
@endpush

@section('dashboard-content')
    <div class="orders-section">
        <div class="orders-header">
            <h2>All Orders</h2>
        </div>
        <table class="orders-table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Transaction ID</th>
                    <th>Total Price</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($orders as $order)
                    <tr>
                        <td class="order-id">{{ $order->id }}</td>
                        <td>{{ $order->customer->name ?? 'N/A' }}</td>
                        <td>{{ $order->transaction_id ?? 'N/A' }}</td>
                        <td>{{ number_format($order->total_price, 2) }} BDT</td>
                        <td>
                            <span class="status-badge status-{{ $order->status }}">
                                {{ ucfirst($order->status) }}
                            </span>
                        </td>
                        <td>
                            <div class="actions">
                                <!-- Eye Button -->
                                @php
                                    $itemsData = $order->orderItems->map(function ($item) {
                                        return [
                                            'product' => $item->product->name ?? 'Deleted Product',
                                            'quantity' => $item->quantity,
                                            'price' => number_format($item->price_at_purchase, 2),
                                        ];
                                    });
                                @endphp

                                <!-- Eye Button -->
                                <button class="action-btn view-btn" data-order-id="{{ $order->id }}"
                                    data-order-items='@json($itemsData)'>
                                    <i class="fas fa-eye"></i>
                                </button>


                                <!-- Next Status Button -->
                                <form action="{{ route('orders.toggleStatus', $order->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    <button class="action-btn">
                                        <i class="fas fa-sync-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="empty-row">No orders found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div id="orderDetailsModal" class="modal-overlay" style="display: none;">
        <div class="modal-window">
            <div class="modal-header">
                <h3>Order Items</h3>
                <button class="close-modal" id="closeModal">&times;</button>
            </div>
            <div class="modal-content">
                <ul id="modalOrderItemsList"></ul>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        document.querySelectorAll('.view-btn').forEach(button => {
            button.addEventListener('click', () => {
                const items = JSON.parse(button.dataset.orderItems);
                const list = document.getElementById('modalOrderItemsList');
                list.innerHTML = '';

                items.forEach(item => {
                    const li = document.createElement('li');
                    li.textContent = `${item.product} × ${item.quantity} @ ${item.price} BDT`;
                    list.appendChild(li);
                });

                document.getElementById('orderDetailsModal').style.display = 'flex';
            });
        });

        document.getElementById('closeModal').addEventListener('click', () => {
            document.getElementById('orderDetailsModal').style.display = 'none';
        });

        window.addEventListener('click', e => {
            if (e.target.id === 'orderDetailsModal') {
                e.target.style.display = 'none';
            }
        });
    </script>
@endpush
