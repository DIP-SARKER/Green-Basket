@extends('admin.dashboard')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/dip/settings.css') }}">
    <style>
        /* Simple modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fff;
            margin: 10% auto;
            padding: 20px;
            border-radius: 8px;
            width: 400px;
            position: relative;
        }

        .modal-content .close {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 24px;
            cursor: pointer;
        }
    </style>
@endpush

@push('title')
    <h1>Settings</h1>
@endpush

@section('dashboard-content')
    <div class="settings-content">

        <div class="form-group">
            <label>Maintenance Mode</label>
            <div class="checkbox-group">
                <input type="checkbox" id="maintenanceMode">
                <label for="maintenanceMode">Enable maintenance mode</label>
            </div>
            <div class="label-hint">When enabled, only administrators can access the store</div>
        </div>
        <div class="settings-section">
            <h2><i class="fas fa-file-invoice-dollar"></i> Currency Settings</h2>
            <div class="form-grid">
                <div class="form-group">
                    <label>Base Currency</label>
                    <div class="currency-grid">
                        <div class="currency-option selected">
                            <div class="symbol">৳</div>
                            <div class="code">BDT</div>
                            <div class="name">Taka</div>
                        </div>
                        <div class="currency-option">
                            <div class="symbol">$</div>
                            <div class="code">USD</div>
                            <div class="name">US Dollar</div>
                        </div>
                        <div class="currency-option">
                            <div class="symbol">₹</div>
                            <div class="code">INR</div>
                            <div class="name">Rupee</div>
                        </div>
                        <div class="currency-option">
                            <div class="symbol">€</div>
                            <div class="code">EUR</div>
                            <div class="name">Euro</div>
                        </div>
                        <div class="currency-option">
                            <div class="symbol">£</div>
                            <div class="code">GBP</div>
                            <div class="name">Pound</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Staff Management Section -->
            <div class="settings-section">
                <h2><i class="fas fa-users-cog"></i> Staff Management</h2>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <table class="staff-table">
                    <thead>
                        <tr>
                            <th>Staff</th>
                            <th>Email</th>
                            <th>Phone No</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($staffMembers as $staff)
                            <tr>
                                <td>
                                    <div style="display:flex;align-items:center;gap:0.75rem;">
                                        <img src="{{ $staff->avatar }}" alt="{{ $staff->name }}" class="staff-avatar">
                                        <div>
                                            <div style="font-weight:500;">{{ $staff->name }}</div>
                                            <div style="font-size:0.8rem;color:var(--text-light);">
                                                {{ $staff->role ?? 'Admin' }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $staff->email }}</td>
                                <td>{{ $staff->phone }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <button class="add-staff-btn btn btn-primary">
                    <i class="fas fa-plus"></i> Add New Admin
                </button>
            </div>

            <!-- Add Staff Modal -->
            <div id="addStaffModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h3>Add New Admin</h3>
                    <form id="addStaffForm" method="POST" action="{{ route('admin.staff.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label>Avatar</label>
                            <input type="text" name="avatar">
                        </div>
                        <button type="submit" class="btn btn-primary">Add Admin</button>
                    </form>
                </div>
            </div>

        </div>
    @endsection

    @push('script')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Add New Staff modal
                const addStaffBtn = document.querySelector('.add-staff-btn');
                const addStaffModal = document.getElementById('addStaffModal');
                const closeModal = addStaffModal.querySelector('.close');

                addStaffBtn.addEventListener('click', () => addStaffModal.style.display = 'block');
                closeModal.addEventListener('click', () => addStaffModal.style.display = 'none');
                window.addEventListener('click', (e) => {
                    if (e.target === addStaffModal) addStaffModal.style.display = 'none';
                });

                // Staff delete buttons
                document.querySelectorAll('.delete-btn').forEach(btn => {
                    btn.addEventListener('click', function() {
                        const row = this.closest('tr');
                        const name = row.querySelector('td div > div').textContent;
                        if (confirm(`Are you sure you want to remove ${name} from staff?`)) {
                            row.remove();
                        }
                    });
                });
            });
        </script>
    @endpush
