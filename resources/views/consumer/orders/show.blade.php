@extends('index')
@push('style')
    <title>Order Details</title>
    <style>
        /* Base Styles */
        .order-details-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }

        /* Heading */
        .order-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 8px;
        }

        .order-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background-color: #3498db;
        }

        /* Order Summary */
        .order-summary {
            margin-bottom: 30px;
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        }

        .order-summary p {
            margin-bottom: 8px;
            font-size: 16px;
            color: #4a5568;
        }

        .order-summary .label {
            font-weight: 600;
            color: #2d3748;
            min-width: 80px;
            display: inline-block;
        }

        /* Status Badge */
        .status-badge {
            text-transform: capitalize;
            font-weight: 500;
            padding: 4px 8px;
            border-radius: 4px;
        }

        .status-pending {
            color: #e67e22;
            background-color: #fef3e9;
        }

        .status-processing {
            color: #3498db;
            background-color: #ebf5fb;
        }

        .status-completed {
            color: #27ae60;
            background-color: #e8f5e9;
        }

        .status-cancelled {
            color: #e74c3c;
            background-color: #fdedec;
        }

        /* Order Table */
        .order-table-container {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .order-table {
            width: 100%;
            border-collapse: collapse;
        }

        .order-table-header {
            background-color: #f8f9fa;
            color: #4a5568;
        }

        .order-table-header th {
            padding: 12px 15px;
            text-align: left;
        }

        .order-table-row {
            border-top: 1px solid #e9ecef;
        }

        .order-table-row td {
            padding: 12px 15px;
            color: #4a5568;
        }

        /* Back Link */
        .back-link {
            margin-top: 20px;
        }

        .back-link a {
            color: #3498db;
            text-decoration: none;
        }

        .back-link a:hover {
            text-decoration: underline;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .order-details-container {
                padding: 15px 10px;
            }

            .order-title {
                font-size: 20px;
            }

            .order-summary {
                padding: 15px;
            }

            .order-table-header {
                display: none;
            }

            .order-table-row {
                display: block;
                margin-bottom: 15px;
                border: 1px solid #e9ecef;
                border-radius: 8px;
            }

            .order-table-row td {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px;
                border-bottom: 1px solid #e9ecef;
            }

            .order-table-row td:last-child {
                border-bottom: none;
            }

            .order-table-row td::before {
                content: attr(data-label);
                font-weight: 600;
                color: #2c3e50;
                margin-right: 15px;
                text-transform: uppercase;
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .order-title {
                font-size: 18px;
            }

            .order-summary p {
                display: flex;
                flex-direction: column;
            }

            .order-summary .label {
                margin-bottom: 5px;
            }

            .order-table-row td {
                flex-direction: column;
                align-items: flex-start;
                padding: 8px 12px;
            }

            .order-table-row td::before {
                margin-bottom: 5px;
            }
        }
    </style>
@endpush

@section('main-content')
    <div class="order-details-container">
    <h2 class="order-title">অর্ডার #{{ $order->id }}</h2>

    <div class="order-summary">
        <p><span class="label">তারিখ:</span> {{ $order->created_at->format('d M Y, h:i A') }}</p>
        <p><span class="label">স্ট্যাটাস:</span> <span class="status-badge status-{{ $order->status }}">{{ ucfirst($order->status) }}</span></p>
        <p><span class="label">মোট:</span> ৳{{ number_format($order->total_price, 2) }}</p>
    </div>

    <div class="order-table-container">
        <table class="order-table">
            <thead class="order-table-header">
                <tr>
                    <th>প্রোডাক্ট</th>
                    <th>পরিমাণ</th>
                    <th>একক মূল্য</th>
                    <th>মোট</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->orderItems as $item)
                    <tr class="order-table-row">
                        <td data-label="Product">{{ $item->product->name ?? 'মুছে ফেলা প্রোডাক্ট' }}</td>
                        <td data-label="Quantity">{{ $item->quantity }}</td>
                        <td data-label="Unit Price">৳{{ number_format($item->price_at_purchase, 2) }}</td>
                        <td data-label="Total">৳{{ number_format($item->price_at_purchase * $item->quantity, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="back-link">
        <a href="{{ route('orders.index') }}">&larr; অর্ডারসমূহে ফিরে যান</a>
    </div>
</div>

@endsection