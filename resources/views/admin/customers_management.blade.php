@extends('admin.dashboard')
@push('style')
    <link rel="stylesheet" href="{{ asset('css/dip/customers_management.css') }}">
@endpush
@push('title')
    <h1>Customer Management</h1>
@endpush
@section('dashboard-content')
    <!-- Filters Panel -->
    <div class="filters-panel">
        <div class="filters-header">
            <div class="filters-title">Filter Customers</div>
        </div>
        <div class="filters-row">
            <div class="filter-group">
                <label class="filter-label">Account Status</label>
                <select class="filter-select">
                    <option value="">All Statuses</option>
                    <option value="active">Active</option>
                    <option value="pending">Pending Verification</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>

            <div class="filter-group">
                <label class="filter-label">Registration Date</label>
                <select class="filter-select">
                    <option value="">All Dates</option>
                    <option value="week">This Week</option>
                    <option value="month">This Month</option>
                    <option value="quarter">This Quarter</option>
                    <option value="year">This Year</option>
                </select>
            </div>

            <div class="filter-group">
                <label class="filter-label">Location</label>
                <input type="text" class="filter-input" placeholder="City or region...">
            </div>

            <div class="filter-group">
                <label class="filter-label">Orders Range</label>
                <select class="filter-select">
                    <option value="">All Ranges</option>
                    <option value="0-5">0-5 orders</option>
                    <option value="6-20">6-20 orders</option>
                    <option value="21-50">21-50 orders</option>
                    <option value="50+">50+ orders</option>
                </select>
            </div>
        </div>

        <div class="filter-actions">
            <button class="btn btn-outline">
                <i class="fas fa-times"></i> Reset Filters
            </button>
            <button class="btn btn-primary">
                <i class="fas fa-filter"></i> Apply Filters
            </button>
        </div>
    </div>
    <!-- Customers Section -->
    <div class="customers-container">
        <div class="table-wrapper">
            <table class="customers-table">
                <thead>
                    <tr>
                        <th>Customer ID</th>
                        <th>Customer Info</th>
                        <th>Phone No</th>
                        <th>Location</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr data-id="{{ $customer->id }}">
                            <td class="customer-id">#CUST-{{ str_pad($customer->id, 4, '0', STR_PAD_LEFT) }}</td>
                            <td>
                                <div class="customer-info">
                                    <div class="customer-avatar">
                                        <img src="https://randomuser.me/api/portraits/{{ $loop->index % 2 == 0 ? 'men' : 'women' }}/{{ 20 + $loop->index }}.jpg"
                                            alt="{{ $customer->name }}">
                                    </div>
                                    <div>
                                        <div class="customer-name">{{ $customer->name }}</div>
                                        <div class="customer-email">{{ $customer->email ?? 'N/A' }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="phone">{{ $customer->phone }}</td>
                            <td class="location">{{ $customer->address ?? 'Unknown' }}</td>
                            <td>
                                <div class="actions">
                                    <button class="action-btn edit-btn" title="Edit Customer">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="pagination">
            <div class="pagination-info">
                Showing 1 to 7 of 1,824 customers
            </div>
            <div class="pagination-controls">
                <button class="page-btn"><i class="fas fa-chevron-left"></i></button>
                <button class="page-btn active">1</button>
                <button class="page-btn">2</button>
                <button class="page-btn">3</button>
                <button class="page-btn">4</button>
                <button class="page-btn">5</button>
                <button class="page-btn"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const table = document.querySelector('.customers-table tbody');

            table.addEventListener('click', function(e) {
                if (!e.target.closest('.edit-btn')) return;

                const button = e.target.closest('.edit-btn');
                const row = button.closest('tr');

                if (!row.classList.contains('editing')) {
                    // Switch to edit mode
                    row.classList.add('editing');
                    button.innerHTML = '<i class="fas fa-save"></i>';

                    const nameCell = row.querySelector('.customer-name');
                    const emailCell = row.querySelector('.customer-email');
                    const phoneCell = row.querySelector('.phone');
                    const locationCell = row.querySelector('.location');

                    nameCell.innerHTML = `<input type="text" value="${nameCell.textContent.trim()}">`;
                    emailCell.innerHTML = `<input type="email" value="${emailCell.textContent.trim()}">`;
                    phoneCell.innerHTML = `<input type="text" value="${phoneCell.textContent.trim()}">`;
                    locationCell.innerHTML =
                        `<input type="text" value="${locationCell.textContent.trim()}">`;

                } else {
                    // Save changes
                    const id = row.dataset.id;
                    const name = row.querySelector('.customer-name input').value.trim();
                    const email = row.querySelector('.customer-email input').value.trim();
                    const phone = row.querySelector('.phone input').value.trim();
                    const address = row.querySelector('.location input').value.trim();

                    fetch(`/admin/customers/${id}/update`, {
                            method: 'PUT',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                'Accept': 'application/json'
                            },
                            body: JSON.stringify({
                                name,
                                email,
                                phone,
                                address
                            })
                        })
                        .then(async (res) => {
                            if (!res.ok) {
                                const err = await res.json();
                                alert("Update failed! " + JSON.stringify(err.errors ?? err
                                    .message));
                                return null;
                            }
                            return res.json();
                        })
                        .then((data) => {
                            if (!data) return;

                            // ✅ Replace inputs with updated values
                            row.querySelector('.customer-name').textContent = name;
                            row.querySelector('.customer-email').textContent = email || 'N/A';
                            row.querySelector('.phone').textContent = phone;
                            row.querySelector('.location').textContent = address;

                            row.classList.remove('editing');
                            button.innerHTML = '<i class="fas fa-edit"></i>';
                        })
                        .catch((err) => {
                            console.error("Error:", err);
                            alert("Update failed due to server error.");
                        });
                }
            });
        });
    </script>
@endpush
