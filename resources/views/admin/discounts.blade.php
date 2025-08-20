@extends('admin.dashboard')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/dip/discounts.css') }}">
@endpush

@push('title')
    <h1>Discounts Management</h1>
@endpush

@section('dashboard-content')
    <div class="discounts-page">
        <div class="discounts-container">
            <!-- ✅ Table Section -->
            <div class="discounts-list">
                <table class="discounts-table">
                    <thead>
                        <tr>
                            <th>Discount Name</th>
                            <th>Code</th>
                            <th>Type</th>
                            <th>Value</th>
                            <th>Dates</th>
                            <th>Uses</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="discountTableBody">
                        @foreach ($discounts as $discount)
                            <tr data-id="{{ $discount->id }}" data-name="{{ $discount->name }}"
                                data-code="{{ $discount->code }}" data-type="{{ $discount->discount_type }}"
                                data-value="{{ $discount->value }}" data-start="{{ $discount->start_date }}"
                                data-end="{{ $discount->end_date }}" data-usage="{{ $discount->usage_limit }}"
                                data-status="{{ $discount->status }}">
                                <td>{{ $discount->name }}</td>
                                <td><span class="discount-code">{{ $discount->code }}</span></td>
                                <td>
                                    <span
                                        class="discount-type {{ $discount->discount_type == 'percentage' ? 'type-percent' : 'type-fixed' }}">
                                        {{ ucfirst($discount->discount_type) }}
                                    </span>
                                </td>
                                <td>
                                    {{ $discount->discount_type == 'percentage' ? $discount->value . '%' : '৳' . $discount->value }}
                                </td>
                                <td>
                                    {{ \Illuminate\Support\Str::substr($discount->start_date, 0, 10) }} ➖
                                    {{ \Illuminate\Support\Str::substr($discount->end_date, 0, 10) }}
                                </td>

                                <td>{{ $discount->usage_limit ?? '∞' }}</td>
                                <td>
                                    @if ($discount->status == 1)
                                        <span class="status-badge status-active">Active</span>
                                    @else
                                        <span class="status-badge status-inactive">Expired</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="actions">
                                        <div class="action-btn edit-btn"><i class="fas fa-edit"></i></div>
                                        <div class="action-btn delete"><i class="fas fa-trash"></i></div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


            <!-- ✅ Form Section -->
            <div class="discount-form">
                <h2 id="formTitle">Create New Discount</h2>

                <form id="discountForm" method="POST" action="{{ route('discounts.store') }}">
                    @csrf
                    <input type="hidden" name="id" id="discountId">

                    <div class="form-group">
                        <label>Discount Name</label>
                        <input type="text" id="discountName" name="name" required>
                    </div>

                    <div class="form-group">
                        <label>Discount Code</label>
                        <input type="text" id="discountCode" name="code" required>
                    </div>

                    <div class="form-group">
                        <label>Discount Type</label>
                        <div>
                            <input type="radio" name="discount_type" value="percentage" checked> Percentage
                            <input type="radio" name="discount_type" value="fixed"> Fixed Amount
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Discount Value</label>
                        <input type="number" id="discountValue" name="value" required>
                    </div>

                    <div class="form-group">
                        <label>Start Date</label>
                        <input type="date" id="startDate" name="start_date" required>
                    </div>

                    <div class="form-group">
                        <label>End Date</label>
                        <input type="date" id="endDate" name="end_date" required>
                    </div>

                    <div class="form-group">
                        <label>Usage</label>
                        <input type="number" id="Usage" name="usage_limit">
                    </div>

                    <div class="form-group">
                        <label>Status:</label>
                        <select name="status" id="discountStatus" required>
                            <option value="1">Active</option>
                            <option value="0">Expired</option>
                        </select>
                    </div>

                    <div class="form-actions">
                        <button type="reset" class="btn btn-outline" id="cancelBtn">Cancel</button>
                        <button type="submit" class="btn btn-primary" id="submitBtn">Create Discount</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById("discountForm");
            const formTitle = document.getElementById("formTitle");
            const submitBtn = document.getElementById("submitBtn");
            const cancelBtn = document.getElementById("cancelBtn");
            const idInput = document.getElementById("discountId");

            // ✅ Reset to Create Mode
            function resetForm() {
                form.reset();
                idInput.value = "";
                form.action = "{{ route('discounts.store') }}";
                form.method = "POST";
                formTitle.textContent = "Create New Discount";
                submitBtn.textContent = "Create Discount";
            }

            function formatDate(dateString) {
                if (!dateString) return "";
                return dateString.split(" ")[0]; // Take only YYYY-MM-DD
            }

            cancelBtn.addEventListener("click", function() {
                resetForm();
            });

            // ✅ Handle Edit
            document.querySelectorAll(".edit-btn").forEach(btn => {
                btn.addEventListener("click", function() {
                    const row = this.closest("tr");
                    const id = row.dataset.id;

                    // Populate form
                    idInput.value = id;
                    document.getElementById("discountName").value = row.dataset.name;
                    document.getElementById("discountCode").value = row.dataset.code;
                    document.getElementById("discountValue").value = row.dataset.value;
                    document.getElementById("startDate").value = formatDate(row.dataset.start);
                    document.getElementById("endDate").value = formatDate(row.dataset.end);
                    document.getElementById("Usage").value = row.dataset.usage ?? "";

                    document.querySelectorAll("input[name='discount_type']").forEach(radio => {
                        radio.checked = (radio.value === row.dataset.type);
                    });

                    // ✅ Ensure it's always "1" or "0"
                    const statusValue = row.dataset.status === "1" || row.dataset.status === 1 ?
                        "1" : "0";
                    document.getElementById("discountStatus").value = statusValue;


                    // Switch to Update Mode
                    form.action = `{{ route('discounts.update', ':id') }}`.replace(':id', id);
                    form.method = "POST";

                    // Add hidden _method input for PUT
                    let methodInput = form.querySelector("input[name='_method']");
                    if (!methodInput) {
                        methodInput = document.createElement("input");
                        methodInput.type = "hidden";
                        methodInput.name = "_method";
                        form.appendChild(methodInput);
                    }
                    methodInput.value = "PUT";

                    formTitle.textContent = "Edit Discount";
                    submitBtn.textContent = "Update Discount";
                });
            });

            // ✅ Handle Delete
            document.querySelectorAll(".delete").forEach(btn => {
                btn.addEventListener("click", function() {
                    const row = this.closest("tr");
                    const id = row.dataset.id;

                    if (confirm("Are you sure you want to delete this discount?")) {
                        const formDelete = document.createElement("form");
                        formDelete.method = "POST";
                        formDelete.action = `{{ route('discounts.delete', ':id') }}`.replace(':id',
                            id);
                        formDelete.innerHTML =
                            `@csrf <input type="hidden" name="_method" value="DELETE">`;
                        document.body.appendChild(formDelete);
                        formDelete.submit();
                    }
                });
            });
        });
    </script>
@endpush
