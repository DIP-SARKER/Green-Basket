@extends('index')
@push('style')
    <title>Cart | Green Basket</title>
    <style>
        /* Wrapper */
        .cart-wrapper {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            background: #f0f5f2;
            border-radius: 8px;
            font-family: 'Arial', sans-serif;
        }

        /* Title */
        .cart-title {
            font-size: 24px;
            color: #2a6538;
            font-weight: 700;
            margin-bottom: 16px;
            text-align: center;
        }

        /* Empty Cart */
        .empty-message {
            font-size: 15px;
            color: #666;
            text-align: center;
        }

        /* Table Styles */
        .cart-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }

        .cart-th {
            background: #2a6538;
            color: #fff;
            padding: 10px;
            font-weight: 600;
            text-align: center;
        }

        .cart-td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        /* Remove Button */
        .btn-remove {
            background: #e74c3c;
            color: #fff;
            padding: 5px 10px;
            border-radius: 3px;
            text-decoration: none;
            font-size: 13px;
        }

        .btn-remove:hover {
            background: #c0392b;
        }

        /* Total Row */
        .cart-total-row .cart-total-label {
            text-align: right;
            padding-right: 15px;
            font-weight: 600;
            color: #333;
            font-size: 18px;
        }

        .cart-total-amount {
            font-size: 24px;
            font-weight: bold;
            color: #1c3f24;
            text-align: left;
        }

        /* Responsive Layout */
        @media (max-width: 768px) {
            .cart-header {
                display: none;
            }

            .cart-table,
            .cart-body,
            .cart-row,
            .cart-td {
                display: block;
                width: 100%;
            }

            .cart-row {
                margin-bottom: 12px;
                border-bottom: 1px solid #ccc;
            }

            .cart-td {
                text-align: right;
                padding-left: 50%;
                position: relative;
            }

            .cart-td::before {
                content: attr(data-label);
                position: absolute;
                left: 10px;
                width: 45%;
                font-weight: 600;
                text-align: left;
                color: #444;
            }

            .cart-total-amount {
                font-size: 26px;
                padding-top: 10px;
            }
        }
    </style>
@endpush

@section('main-content')
<div class="cart-wrapper">
    <h2 class="cart-title">Your Cart</h2>

    @if($cartItems->isEmpty())
        <p class="empty-message">Your cart is empty.</p>
    @else
        <table class="cart-table">
            <thead class="cart-header">
                <tr>
                    <th class="cart-th">Select</th>
                    <th class="cart-th">Product</th>
                    <th class="cart-th">Qty</th>
                    <th class="cart-th">Price</th>
                    <th class="cart-th">Subtotal</th>
                    <th class="cart-th">Remove</th>
                </tr>
            </thead>
            <tbody class="cart-body">
                @php $total = 0; @endphp
                @foreach($cartItems as $item)
                    @php
                        $subtotal = $item->quantity * $item->product->price;
                        $total += $subtotal;
                    @endphp
                    <tr class="cart-row">
                        <td class="cart-td">
                            <input type="checkbox" form="checkout-form" name="selected_items[]" value="{{ $item->id }}">
                        </td>
                        <td class="cart-td">{{ $item->product->name }}</td>
                        <td class="cart-td">
                            <form action="{{ route('cart.update', $item->product_id) }}" method="POST" style="display: inline-flex;">
                                @csrf
                                @method('PUT')
                                <input type="number" name="quantity" value="{{ $item->quantity }}" min="1"
                                    style="width: 60px; padding: 5px; margin-right: 6px; text-align: center;" />
                                <button type="submit"
                                    style="background: #2a6538; color: white; border: none; padding: 5px 10px; border-radius: 4px; font-size: 13px; cursor: pointer;">
                                    Update
                                </button>
                            </form>
                        </td>
                        <td class="cart-td">৳{{ number_format($item->product->price, 2) }}</td>
                        <td class="cart-td">৳{{ number_format($subtotal, 2) }}</td>
                        <td class="cart-td">
                            <a href="{{ route('cart.remove', $item->product_id) }}" class="btn-remove">Remove</a>
                        </td>
                    </tr>
                @endforeach
                <tr class="cart-total-row">
                    <td colspan="3" class="cart-total-label">Total:</td>
                    <td class="cart-total-amount">৳{{ number_format($total, 2) }}</td>
                </tr>
            </tbody>
        </table>

        <!-- Checkout Form (outside table) -->
        <form id="checkout-form" action="{{ route('checkout') }}" method="POST" style="text-align: right; padding-top: 20px;">
            @csrf
            <button type="submit"
                style="background-color: #2a6538; color: white; padding: 10px 20px; border: none; border-radius: 5px; font-weight: bold; font-size: 16px; cursor: pointer;">
                Proceed to Checkout (Selected Items Only)
            </button>
        </form>
    @endif
</div>

@endsection