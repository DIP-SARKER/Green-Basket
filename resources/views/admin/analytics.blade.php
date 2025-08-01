 @extends('admin.dashboard')
 @push('style')
     <link rel="stylesheet" href="{{ asset('css/dip/analytics.css') }}">
 @endpush
 @push('title')
     <h1>Analytics</h1>
 @endpush
 @section('dashboard-content')
     <!-- Analytics Content -->
     <div class="analytics-grid">
         <div class="analytics-card">

             <div class="section-header">
                 <h2>Revenue Overview</h2>
                 <a href="#">View Report <i class="fas fa-arrow-right"></i></a>
             </div>
             <div class="chart-filters">
                 <button class="chart-filter-btn" data-period="week">Weekly</button>
                 <button class="chart-filter-btn" data-period="month">Monthly</button>
                 <button class="chart-filter-btn active" data-period="quarter">Bi-Yearly</button>
             </div>
             <div class="chart-wrapper">
                 <canvas id="revenueChart"></canvas>
             </div>
         </div>


         <div class="analytics-card">
             <h3>Key Metrics</h3>
             <div class="metric-card">
                 <div class="metric-value">12.8%</div>
                 <div class="metric-label">Conversion Rate</div>
                 <div class="trend up">
                     <i class="fas fa-arrow-up"></i> 1.2% from last month
                 </div>
             </div>
             <div class="metric-card">
                 <div class="metric-value">৳1,850</div>
                 <div class="metric-label">Average Order Value</div>
                 <div class="trend up">
                     <i class="fas fa-arrow-up"></i> ৳120 from last month
                 </div>
             </div>
             <div class="metric-card">
                 <div class="metric-value">2.3 min</div>
                 <div class="metric-label">Avg. Response Time</div>
                 <div class="trend down">
                     <i class="fas fa-arrow-down"></i> 0.4 min from last month
                 </div>
             </div>
         </div>
     </div>

     <div class="dashboard-content">
         <div class="chart-container">
             <div class="section-header">
                 <h2>Customer Acquisition</h2>
                 <a href="#">View Report <i class="fas fa-arrow-right"></i></a>
             </div>
             <div class="chart-wrapper">
                 <canvas id="customerChart"></canvas>
             </div>
         </div>

         <div class="chart-container">
             <div class="section-header">
                 <h2>Product Performance</h2>
                 <a href="#">View Report <i class="fas fa-arrow-right"></i></a>
             </div>
             <div class="chart-wrapper">
                 <canvas id="productChart"></canvas>
             </div>
         </div>
     </div>
 @endsection
 @push('script')
     <script>
         document.addEventListener('DOMContentLoaded', function() {
             // Chart initialization
             const ctx = document.getElementById('revenueChart').getContext('2d');

             // Chart data
             const chartData = {
                 week: {
                     labels: ['Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
                     data: [18200, 21500, 19300, 24700, 26100, 30500, 28900],
                     label: 'Weekly Revenue'
                 },
                 month: {
                     labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
                     data: [98000, 105000, 112000, 124000],
                     label: 'Monthly Revenue'
                 },
                 quarter: {
                     labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                     data: [425000, 437000, 468000, 502000, 490000, 510000],
                     label: 'Bi-Yearly Revenue'
                 }
             };

             // Create the chart
             const revenueChart = new Chart(ctx, {
                 type: 'line',
                 data: {
                     labels: chartData.quarter.labels,
                     datasets: [{
                         label: chartData.quarter.label + ' (in ৳)',
                         data: chartData.quarter.data,
                         backgroundColor: 'rgba(46, 125, 50, 0.1)',
                         borderColor: 'rgba(46, 125, 50, 1)',
                         borderWidth: 2,
                         pointBackgroundColor: 'rgba(46, 125, 50, 1)',
                         pointRadius: 5,
                         pointHoverRadius: 7,
                         tension: 0.3,
                         fill: true
                     }]
                 },
                 options: {
                     responsive: true,
                     maintainAspectRatio: false,
                     plugins: {
                         legend: {
                             position: 'top',
                         },
                         tooltip: {
                             callbacks: {
                                 label: function(context) {
                                     return `৳${context.parsed.y.toLocaleString()}`;
                                 }
                             }
                         }
                     },
                     scales: {
                         y: {
                             beginAtZero: true,
                             ticks: {
                                 callback: function(value) {
                                     return '৳' + value.toLocaleString();
                                 }
                             },
                             grid: {
                                 color: 'rgba(0, 0, 0, 0.05)'
                             }
                         },
                         x: {
                             grid: {
                                 display: false
                             }
                         }
                     }
                 }
             });

             // Chart period switching
             document.querySelectorAll('.chart-filter-btn').forEach(btn => {
                 btn.addEventListener('click', function() {
                     // Remove active class from all buttons
                     document.querySelectorAll('.chart-filter-btn').forEach(b =>
                         b.classList.remove('active'));

                     // Add active class to clicked button
                     this.classList.add('active');

                     // Get period
                     const period = this.dataset.period;

                     // Update chart
                     revenueChart.data.labels = chartData[period].labels;
                     revenueChart.data.datasets[0].data = chartData[period].data;
                     revenueChart.data.datasets[0].label = chartData[period].label + ' (in ৳)';
                     revenueChart.update();
                 });
             });

             // Get contexts for customer and product charts
             const customerCtx = document.getElementById('customerChart').getContext('2d');
             const productCtx = document.getElementById('productChart').getContext('2d');

             // Customer Acquisition chart
             const customerChart = new Chart(customerCtx, {
                 type: 'bar',
                 data: {
                     labels: ['Jul', 'Aug', 'Sep', 'Oct'],
                     datasets: [{
                         label: 'New Customers',
                         data: [320, 410, 390, 470],
                         backgroundColor: 'rgba(33, 150, 243, 0.7)',
                         borderRadius: 6
                     }]
                 },
                 options: {
                     responsive: true,
                     maintainAspectRatio: false,
                     plugins: {
                         legend: {
                             display: false
                         }
                     },
                     scales: {
                         y: {
                             beginAtZero: true,
                             ticks: {
                                 stepSize: 50
                             }
                         }
                     }
                 }
             });

             // Product chart
             const productChart = new Chart(productCtx, {
                 type: 'doughnut',
                 data: {
                     labels: ['Fruits', 'Vegetables', 'Dairy', 'Meat & Fish', 'Grains'],
                     datasets: [{
                         label: 'Sales Distribution',
                         data: [35, 25, 15, 12, 13],
                         backgroundColor: [
                             'rgba(76, 175, 80, 0.7)',
                             'rgba(33, 150, 243, 0.7)',
                             'rgba(255, 193, 7, 0.7)',
                             'rgba(244, 67, 54, 0.7)',
                             'rgba(156, 39, 176, 0.7)'
                         ],
                         borderWidth: 1
                     }]
                 },
                 options: {
                     responsive: true,
                     maintainAspectRatio: false,
                     plugins: {
                         legend: {
                             position: 'right'
                         }
                     }
                 }
             });
         });
     </script>
 @endpush
