 @extends('admin.dashboard')
 @push('style')
     <link rel="stylesheet" href="{{ asset('css/dip/settings.css') }}">
 @endpush
 @push('title')
     <h1>Settings</h1>
 @endpush
 @section('dashboard-content')
     <!-- Settings Content - All sections integrated -->
     <div class="settings-content">
         <!-- Store Information Section -->
         <div class="settings-section">
             <h2><i class="fas fa-store"></i> Store Information</h2>
             <div class="form-grid">
                 <div class="form-group">
                     <label for="storeName">Store Name</label>
                     <input type="text" id="storeName" class="form-control" value="GreenBasket"
                         placeholder="Enter store name">
                 </div>

                 <div class="form-group">
                     <label for="storeEmail">Store Email</label>
                     <input type="email" id="storeEmail" class="form-control" value="info@greenbasket.com"
                         placeholder="Enter store email">
                 </div>

                 <div class="form-group">
                     <label for="storePhone">Store Phone</label>
                     <input type="tel" id="storePhone" class="form-control" value="+880 1234 567890"
                         placeholder="Enter store phone">
                 </div>

                 <div class="form-group">
                     <label for="storeAddress">Store Address</label>
                     <textarea id="storeAddress" class="form-control" rows="2" placeholder="Enter store address">Farmgate, Dhaka 1215, Bangladesh</textarea>
                 </div>
                 <div class="form-group">
                     <label>Maintenance Mode</label>
                     <div class="checkbox-group">
                         <input type="checkbox" id="maintenanceMode">
                         <label for="maintenanceMode">Enable maintenance mode</label>
                     </div>
                     <div class="label-hint">When enabled, only administrators can access the store</div>
                 </div>
             </div>
         </div>

         <!-- Currency Settings Section -->
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


                 <div class="form-group">
                     <label for="decimalPlaces">Number of Decimals</label>
                     <select id="decimalPlaces" class="form-control">
                         <option>2 (৳99.99)</option>
                         <option>1 (৳99.9)</option>
                         <option>0 (৳100)</option>
                     </select>
                 </div>

             </div>
         </div>

         <!-- Staff Management Section -->
         <div class="settings-section">
             <h2><i class="fas fa-users-cog"></i> Staff Management</h2>

             <table class="staff-table">
                 <thead>
                     <tr>
                         <th>Staff</th>
                         <th>Email</th>
                         <th>Role</th>
                         <th>Status</th>
                         <th>Actions</th>
                     </tr>
                 </thead>
                 <tbody>
                     <tr>
                         <td>
                             <div style="display: flex; align-items: center; gap: 0.75rem;">
                                 <img src="https://randomuser.me/api/portraits/men/15.jpg" alt="Dip Sarker"
                                     class="staff-avatar">
                                 <div>
                                     <div style="font-weight: 500;">DIP SARKER</div>
                                     <div style="font-size: 0.8rem; color: var(--text-light);">Administrator</div>
                                 </div>
                             </div>
                         </td>
                         <td>sarker15-5274@diu.edu.bd</td>
                         <td><span class="role-badge role-admin">Admin</span></td>
                         <td><span style="color: var(--success);">Active</span></td>
                         <td>
                             <div class="staff-actions">
                                 <button class="action-btn edit-btn">Edit</button>
                                 <button class="action-btn delete-btn">Delete</button>
                             </div>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <div style="display: flex; align-items: center; gap: 0.75rem;">
                                 <img src="https://randomuser.me/api/portraits/men/16.jpg" alt="Md. Mamun Ur Rashid Hridoy"
                                     class="staff-avatar">
                                 <div>
                                     <div style="font-weight: 500;">Md. Mamun Ur Rashid Hridoy</div>
                                     <div style="font-size: 0.8rem; color: var(--text-light);">Manager</div>
                                 </div>
                             </div>
                         </td>
                         <td>rashid15-5273@diu.edu.bd</td>
                         <td><span class="role-badge role-manager">Manager</span></td>
                         <td><span style="color: var(--success);">Active</span></td>
                         <td>
                             <div class="staff-actions">
                                 <button class="action-btn edit-btn">Edit</button>
                                 <button class="action-btn delete-btn">Delete</button>
                             </div>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <div style="display: flex; align-items: center; gap: 0.75rem;">
                                 <img src="https://randomuser.me/api/portraits/men/33.jpg" alt="Md. Mashiur Rrahman"
                                     class="staff-avatar">
                                 <div>
                                     <div style="font-weight: 500;">Md. Mashiur Rrahman</div>
                                     <div style="font-size: 0.8rem; color: var(--text-light);">Support</div>
                                 </div>
                             </div>
                         </td>
                         <td>rahman15-4766@diu.edu.bd</td>
                         <td><span class="role-badge role-support">Support</span></td>
                         <td><span style="color: var(--success);">Active</span></td>
                         <td>
                             <div class="staff-actions">
                                 <button class="action-btn edit-btn">Edit</button>
                                 <button class="action-btn delete-btn">Delete</button>
                             </div>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <div style="display: flex; align-items: center; gap: 0.75rem;">
                                 <img src="https://randomuser.me/api/portraits/men/44.jpg" alt="Md. Sakib Khan"
                                     class="staff-avatar">
                                 <div>
                                     <div style="font-weight: 500;">Md. Sakib Khan</div>
                                     <div style="font-size: 0.8rem; color: var(--text-light);">Developer</div>
                                 </div>
                             </div>
                         </td>
                         <td>khan15-5728@diu.edu.bd</td>
                         <td><span class="role-badge role-developer">Developer</span></td>
                         <td><span style="color: var(--success);">Active</span></td>
                         <td>
                             <div class="staff-actions">
                                 <button class="action-btn edit-btn">Edit</button>
                                 <button class="action-btn delete-btn">Delete</button>
                             </div>
                         </td>
                     </tr>
                     <tr>
                         <td>
                             <div style="display: flex; align-items: center; gap: 0.75rem;">
                                 <img src="https://randomuser.me/api/portraits/women/21.jpg" alt="Sumaiya Tabassum Prome"
                                     class="staff-avatar">
                                 <div>
                                     <div style="font-weight: 500;">Sumaiya Tabassum Prome</div>
                                     <div style="font-size: 0.8rem; color: var(--text-light);">QA Analyst</div>
                                 </div>
                             </div>
                         </td>
                         <td>prome15-5902@diu.edu.bd</td>
                         <td><span class="role-badge role-qa">QA</span></td>
                         <td><span style="color: var(--success);">Active</span></td>
                         <td>
                             <div class="staff-actions">
                                 <button class="action-btn edit-btn">Edit</button>
                                 <button class="action-btn delete-btn">Delete</button>
                             </div>
                         </td>
                     </tr>
                 </tbody>

             </table>

             <button class="add-staff-btn">
                 <i class="fas fa-plus"></i> Add New Staff
             </button>
         </div>

         <!-- Data Management Section -->
         <div class="settings-section">
             <h2><i class="fas fa-database"></i> Data Management</h2>

             <div class="data-actions">
                 <div class="data-card">
                     <h3><i class="fas fa-file-export"></i> Export Data</h3>
                     <p>Export your store data in CSV format for backup or analysis purposes.
                         You can export products, customers, and orders separately.
                     </p>
                     <button class="btn btn-outline">Export Products</button>
                 </div>

                 <div class="data-card">
                     <h3><i class="fas fa-file-import"></i> Import Data</h3>
                     <p>Import products, customers, or orders from CSV files to your store.
                         Please ensure your CSV file is properly formatted.
                     </p>
                     <button class="btn btn-outline">Import Data</button>
                 </div>

                 <div class="data-card">
                     <h3><i class="fas fa-trash-restore"></i> Reset Data</h3>
                     <p>Reset your store to initial state. This will delete all products, orders, and customer data.</p>
                     <button class="btn reset-btn">Reset Store Data</button>
                 </div>
             </div>
         </div>

         <div class="form-actions">
             <button class="btn btn-outline">Discard Changes</button>
             <button class="btn btn-primary">Save Settings</button>
         </div>
     </div>
 @endsection
 @push('script')
     <script>
         document.addEventListener('DOMContentLoaded', function() {
             // Currency selection
             const currencyOptions = document.querySelectorAll('.currency-option');
             currencyOptions.forEach(option => {
                 option.addEventListener('click', function() {
                     currencyOptions.forEach(opt => opt.classList.remove('selected'));
                     this.classList.add('selected');
                 });
             });

             // Save settings
             const saveBtn = document.querySelector('.btn-primary');
             saveBtn.addEventListener('click', function() {
                 // In a real app, this would save settings to the server
                 alert('Settings saved successfully!');
             });

             // Maintenance mode toggle
             const maintenanceToggle = document.getElementById('maintenanceMode');
             maintenanceToggle.addEventListener('change', function() {
                 if (this.checked) {
                     if (!confirm(
                             'Enabling maintenance mode will make your store inaccessible to customers. Continue?'
                         )) {
                         this.checked = false;
                     }
                 }
             });

             // Staff delete buttons
             const deleteButtons = document.querySelectorAll('.delete-btn');
             deleteButtons.forEach(btn => {
                 btn.addEventListener('click', function() {
                     const row = this.closest('tr');
                     const name = row.querySelector('td:first-child div:first-child').textContent;
                     if (confirm(`Are you sure you want to remove ${name} from staff?`)) {
                         row.style.opacity = 0;
                         setTimeout(() => {
                             row.remove();
                         }, 300);
                     }
                 });
             });

             // Reset store data
             const resetBtn = document.querySelector('.reset-btn');
             resetBtn.addEventListener('click', function() {
                 if (confirm(
                         'WARNING: This will permanently delete all store data including products, orders, and customer information. Are you absolutely sure?'
                     )) {
                     alert('Store reset initiated. This may take a few minutes...');
                 }
             });
         });
     </script>
 @endpush
