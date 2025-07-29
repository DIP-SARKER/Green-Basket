@extends('index')

@push('style')
<title>My orders</title>
<style>
    /* My Orders Page Styles */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem 1rem;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #333;
}

.page-heading {
    font-size: 2rem;
    font-weight: 600;
    margin-bottom: 2rem;
    color: #2c3e50;
    text-align: center;
    position: relative;
    padding-bottom: 0.5rem;
}

.page-heading::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background-color: #3498db;
}

.no-orders {
    text-align: center;
    font-size: 1.1rem;
    color: #7f8c8d;
    padding: 2rem;
    background-color: #f8f9fa;
    border-radius: 8px;
    margin-top: 1rem;
}

.orders-box {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    overflow: hidden;
    margin-top: 1.5rem;
}

.orders-table {
    width: 100%;
    border-collapse: collapse;
}

.orders-table thead {
    background-color: #f8f9fa;
}

.orders-table th {
    padding: 1rem;
    text-align: left;
    font-weight: 600;
    color: #2c3e50;
    text-transform: uppercase;
    font-size: 0.85rem;
    letter-spacing: 0.5px;
}

.orders-table td {
    padding: 1rem;
    border-bottom: 1px solid #e9ecef;
    vertical-align: middle;
}

.orders-table tbody tr:last-child td {
    border-bottom: none;
}

.orders-table tbody tr:hover {
    background-color: #f8f9fa;
}

.status {
    font-weight: 500;
    text-transform: capitalize;
}

.status[data-status="pending"] {
    color: #e67e22;
}

.status[data-status="processing"] {
    color: #3498db;
}

.status[data-status="completed"] {
    color: #27ae60;
}

.status[data-status="cancelled"] {
    color: #e74c3c;
}

.details-link {
    display: inline-block;
    padding: 0.5rem 1rem;
    background-color: #3498db;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    font-size: 0.9rem;
    transition: all 0.3s ease;
}

.details-link:hover {
    background-color: #2980b9;
    transform: translateY(-1px);
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
    .container {
        padding: 1rem;
    }

    .page-heading {
        font-size: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .orders-table thead {
        display: none;
    }

    .orders-table tr {
        display: block;
        margin-bottom: 1rem;
        border: 1px solid #e9ecef;
        border-radius: 8px;
    }

    .orders-table td {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.75rem;
        border-bottom: 1px solid #e9ecef;
    }

    .orders-table td::before {
        content: attr(data-label);
        font-weight: 600;
        color: #2c3e50;
        margin-right: 1rem;
        text-transform: uppercase;
        font-size: 0.8rem;
    }

    .orders-table td:last-child {
        border-bottom: none;
    }

    .details-link {
        padding: 0.4rem 0.8rem;
        font-size: 0.8rem;
    }
}

@media (max-width: 480px) {
    .page-heading {
        font-size: 1.3rem;
    }

    .orders-table td {
        flex-direction: column;
        align-items: flex-start;
        padding: 0.5rem 0.75rem;
    }

    .orders-table td::before {
        margin-bottom: 0.25rem;
    }
}
</style>
@endpush

@section('title', 'My Orders')

@section('main-content')
<div class="container">
    <h2 class="page-heading">My Orders</h2>

    @if ($orders->isEmpty())
        <p class="no-orders">You haven't placed any orders yet.</p>
    @else
        <div class="orders-box">
            <table class="orders-table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>#{{ $order->id }}</td>
                            <td>{{ $order->created_at->format('d M Y') }}</td>
                            <td>৳{{ number_format($order->total_price, 2) }}</td>
                            <td class="status" data-status="{{ strtolower($order->status) }}">{{ $order->status }}</td>
                            <td>
                                <a href="{{ route('orders.show', $order->id) }}" class="details-link">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
