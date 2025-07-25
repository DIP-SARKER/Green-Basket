 @extends('admin.dashboard')
 @push('style')
     <link rel="stylesheet" href="{{ asset('css/dip/discounts.css') }}">
 @endpush
 @push('title')
     <h1>Discounts Management</h1>
 @endpush
 @section('dashboard-content')
     <!-- Discounts Content -->
     <div class="discounts-page">
         <div class="discounts-container">
             <div class="discounts-list">
                 <div class="discounts-filters">
                     <div class="filter-group">
                         <button class="filter-btn active">All Discounts</button>
                         <button class="filter-btn">Active</button>
                         <button class="filter-btn">Upcoming</button>
                         <button class="filter-btn">Expired</button>
                     </div>
                     <div class="search-box">
                         <i class="fas fa-search"></i>
                         <input type="text" placeholder="Search discounts...">
                     </div>
                 </div>

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
                     <tbody>
                         <tr>
                             <td>Summer Sale</td>
                             <td><span class="discount-code">SUMMER25</span></td>
                             <td><span class="discount-type type-percent">Percentage</span></td>
                             <td>25%</td>
                             <td>Jun 1 - Aug 31</td>
                             <td>1,245</td>
                             <td><span class="status-badge status-active">Active</span></td>
                             <td>
                                 <div class="actions">
                                     <div class="action-btn edit-btn"><i class="fas fa-pen"></i></div>
                                     <div class="action-btn delete-btn"><i class="fas fa-trash"></i></div>
                                 </div>
                             </td>
                         </tr>
                         <tr>
                             <td>First Order Discount</td>
                             <td><span class="discount-code">WELCOME10</span></td>
                             <td><span class="discount-type type-fixed">Fixed</span></td>
                             <td>৳100</td>
                             <td>Jan 1 - Dec 31</td>
                             <td>845</td>
                             <td><span class="status-badge status-active">Active</span></td>
                             <td>
                                 <div class="actions">
                                     <div class="action-btn edit-btn"><i class="fas fa-pen"></i></div>
                                     <div class="action-btn delete-btn"><i class="fas fa-trash"></i></div>
                                 </div>
                             </td>
                         </tr>
                         <tr>
                             <td>Winter Clearance</td>
                             <td><span class="discount-code">WINTER30</span></td>
                             <td><span class="discount-type type-percent">Percentage</span></td>
                             <td>30%</td>
                             <td>Dec 1 - Dec 31</td>
                             <td>0</td>
                             <td><span class="status-badge status-upcoming">Upcoming</span></td>
                             <td>
                                 <div class="actions">
                                     <div class="action-btn edit-btn"><i class="fas fa-pen"></i></div>
                                     <div class="action-btn delete-btn"><i class="fas fa-trash"></i></div>
                                 </div>
                             </td>
                         </tr>
                         <tr>
                             <td>Eid Special</td>
                             <td><span class="discount-code">EID2023</span></td>
                             <td><span class="discount-type type-fixed">Fixed</span></td>
                             <td>৳150</td>
                             <td>Apr 20 - Apr 25</td>
                             <td>1,780</td>
                             <td><span class="status-badge status-expired">Expired</span></td>
                             <td>
                                 <div class="actions">
                                     <div class="action-btn edit-btn"><i class="fas fa-pen"></i></div>
                                     <div class="action-btn delete-btn"><i class="fas fa-trash"></i></div>
                                 </div>
                             </td>
                         </tr>
                         <tr>
                             <td>Farmers Appreciation</td>
                             <td><span class="discount-code">FARMER15</span></td>
                             <td><span class="discount-type type-percent">Percentage</span></td>
                             <td>15%</td>
                             <td>May 1 - May 15</td>
                             <td>342</td>
                             <td><span class="status-badge status-expired">Expired</span></td>
                             <td>
                                 <div class="actions">
                                     <div class="action-btn edit-btn"><i class="fas fa-pen"></i></div>
                                     <div class="action-btn delete-btn"><i class="fas fa-trash"></i></div>
                                 </div>
                             </td>
                         </tr>
                         <tr>
                             <td>Green Friday</td>
                             <td><span class="discount-code">GREEN20</span></td>
                             <td><span class="discount-type type-percent">Percentage</span></td>
                             <td>20%</td>
                             <td>Nov 24 - Nov 26</td>
                             <td>0</td>
                             <td><span class="status-badge status-draft">Draft</span></td>
                             <td>
                                 <div class="actions">
                                     <div class="action-btn edit-btn"><i class="fas fa-pen"></i></div>
                                     <div class="action-btn delete-btn"><i class="fas fa-trash"></i></div>
                                 </div>
                             </td>
                         </tr>
                     </tbody>
                 </table>
             </div>

             <div class="discount-form">
                 <h2 style="margin-bottom: 1.5rem;">Create New Discount</h2>

                 <div class="form-group">
                     <label for="discountName">Discount Name</label>
                     <input type="text" id="discountName" class="form-control" placeholder="Summer Sale">
                 </div>

                 <div class="form-group">
                     <label for="discountCode">Discount Code</label>
                     <input type="text" id="discountCode" class="form-control" placeholder="SUMMER25">
                 </div>

                 <div class="form-group">
                     <label>Discount Type</label>
                     <div class="radio-group">
                         <div class="radio-option">
                             <input type="radio" id="typePercentage" name="discountType" checked>
                             <label for="typePercentage">Percentage</label>
                         </div>
                         <div class="radio-option">
                             <input type="radio" id="typeFixed" name="discountType">
                             <label for="typeFixed">Fixed Amount</label>
                         </div>
                     </div>
                 </div>

                 <div class="form-group">
                     <label for="discountValue">Discount Value</label>
                     <input type="number" id="discountValue" class="form-control" placeholder="25">
                     <small class="text-muted">Enter percentage (e.g., 25) or fixed amount (e.g., 100)</small>
                 </div>

                 <div class="form-row">
                     <div class="form-group">
                         <label for="startDate">Start Date</label>
                         <input type="date" id="startDate" class="form-control">
                     </div>

                     <div class="form-group">
                         <label for="endDate">End Date</label>
                         <input type="date" id="endDate" class="form-control">
                     </div>
                 </div>

                 <div class="form-group">
                     <label for="maxUses">Maximum Uses (Optional)</label>
                     <input type="number" id="maxUses" class="form-control" placeholder="Unlimited">
                 </div>

                 <div class="form-actions">
                     <button class="btn btn-outline">Cancel</button>
                     <button class="btn btn-primary">Create Discount</button>
                 </div>

                 <div class="stats-summary">
                     <div class="stat-item">
                         <div class="value">8</div>
                         <div class="label">Active Discounts</div>
                     </div>
                     <div class="stat-item">
                         <div class="value">1,245</div>
                         <div class="label">Total Uses</div>
                     </div>
                     <div class="stat-item">
                         <div class="value">৳24,580</div>
                         <div class="label">Total Savings</div>
                     </div>
                     <div class="stat-item">
                         <div class="value">12%</div>
                         <div class="label">Conversion Rate</div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @endsection
 @push('script')
     <script>
        //  document.addEventListener('DOMContentLoaded', function() {
        //      // Highlight active filter
        //      const filterBtns = document.querySelectorAll('.filter-btn');
        //      filterBtns.forEach(btn => {
        //          btn.addEventListener('click', function() {
        //              filterBtns.forEach(b => b.classList.remove('active'));
        //              this.classList.add('active');
        //          });
        //      });

        //      // Form validation
        //      const discountForm = document.querySelector('.discount-form');
        //      discountForm.addEventListener('submit', function(e) {
        //          e.preventDefault();

        //          const discountName = document.getElementById('discountName').value;
        //          const discountCode = document.getElementById('discountCode').value;

        //          if (!discountName || !discountCode) {
        //              alert('Please fill in all required fields');
        //              return;
        //          }

        //          // In a real app, this would submit the form to the server
        //          alert('Discount created successfully!');
        //          discountForm.reset();
        //      });

        //      // Edit button functionality
        //      const editBtns = document.querySelectorAll('.edit-btn');
        //      editBtns.forEach(btn => {
        //          btn.addEventListener('click', function() {
        //              const row = this.closest('tr');
        //              const discountName = row.cells[0].textContent;

        //              // In a real app, this would load the discount data into the form
        //              alert(`Editing discount: ${discountName}`);
        //              document.getElementById('discountName').value = discountName;
        //              document.querySelector('.discount-form h2').textContent = 'Edit Discount';
        //              document.querySelector('.btn-primary').textContent = 'Update Discount';
        //          });
        //      });

        //      // Delete button functionality
        //      const deleteBtns = document.querySelectorAll('.delete-btn');
        //      deleteBtns.forEach(btn => {
        //          btn.addEventListener('click', function() {
        //              const row = this.closest('tr');
        //              const discountName = row.cells[0].textContent;

        //              if (confirm(`Are you sure you want to delete the discount: ${discountName}?`)) {
        //                  row.remove();
        //                  alert('Discount deleted successfully!');
        //              }
        //          });
        //      });
        //  });
     </script>
 @endpush
