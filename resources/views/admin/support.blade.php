<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Support Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset("css/dip/common.css") }}">
    <link rel="stylesheet" href="{{ asset("css/dip/support.css") }}">
</head>
<body>
    <!-- Sidebar Navigation -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <h2><i class="fas fa-store"></i> <span class="logo-text">GreenBasket</span></h2>
        </div>
        <ul class="nav-links">
            <li><a href="{{ route('admin-dashboard') }}"><i class="fas fa-tachometer-alt"></i> <span class="nav-text">Dashboard</span></a></li>
            <li><a href="{{ route('products-management') }}"><i class="fas fa-shopping-bag"></i> <span class="nav-text">Products</span></a></li>
            <li><a href="{{ route('orders-management') }}"><i class="fas fa-list"></i> <span class="nav-text">Orders</span></a></li>
            <li><a href="{{ route('farmers-management') }}"><i class="fas fa-tractor"></i> <span class="nav-text">Farmers</span></a></li>
            <li><a href="{{ route('customers-management') }}"><i class="fas fa-users"></i> <span class="nav-text">Customers</span></a></li>
            <li><a href="{{ route('analytics-dashboard') }}"><i class="fas fa-chart-line"></i> <span class="nav-text">Analytics</span></a></li>
            <li><a href="{{ route('discounts-management') }}"><i class="fas fa-tags"></i> <span class="nav-text">Discounts</span></a></li>
            <li><a href="" class="active"><i class="fas fa-comments"></i> <span class="nav-text">Support</span></a></li>
            <li><a href="{{ route('settings') }}"><i class="fas fa-cog"></i> <span class="nav-text">Settings</span></a></li>
        </ul>
    </aside>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header">
            <h1>Support Management</h1>
            <div class="user-info">
                <div class="notification">
                    <i class="fas fa-bell"></i>
                    <span class="badge">3</span>
                </div>
                <div class="user-profile">
                    <img src="https://dip-sarker.github.io/DIP_SARKER/images/home.png" alt="Admin">
                    <div class="info">
                        <div class="name">DIP SARKER</div>
                        <div class="role">Administrator</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="stats-row">
            <div class="stat-card card-1">
                <div class="stat-info">
                    <h3>Total Tickets</h3>
                    <div class="value">248</div>
                    <div class="trend up">
                        <i class="fas fa-arrow-up"></i> 8.2% from last week
                    </div>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-ticket-alt"></i>
                </div>
            </div>

            <div class="stat-card card-2">
                <div class="stat-info">
                    <h3>Open Tickets</h3>
                    <div class="value">42</div>
                    <div class="trend down">
                        <i class="fas fa-arrow-down"></i> 3.1% from last week
                    </div>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-envelope-open"></i>
                </div>
            </div>

            <div class="stat-card card-3">
                <div class="stat-info">
                    <h3>Avg. Response Time</h3>
                    <div class="value">6h 24m</div>
                    <div class="trend up">
                        <i class="fas fa-arrow-up"></i> 18 min improvement
                    </div>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-clock"></i>
                </div>
            </div>

            <div class="stat-card card-4">
                <div class="stat-info">
                    <h3>Satisfaction Rate</h3>
                    <div class="value">94%</div>
                    <div class="trend up">
                        <i class="fas fa-arrow-up"></i> 2.3% from last month
                    </div>
                </div>
                <div class="stat-icon">
                    <i class="fas fa-smile"></i>
                </div>
            </div>
        </div>

        <!-- Support Content -->
        <div class="support-container">
            <div class="ticket-list">
                <div class="ticket-filters">
                    <div class="filter-group">
                        <button class="filter-btn active">All Tickets</button>
                        <button class="filter-btn">Open</button>
                        <button class="filter-btn">Pending</button>
                        <button class="filter-btn">Resolved</button>
                    </div>
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search tickets...">
                    </div>
                </div>
                
                <div class="tickets">
                    <!-- Ticket Item 1 -->
                    <div class="ticket-item active">
                        <div class="ticket-header">
                            <div class="ticket-title">
                                <i class="fas fa-circle text-danger"></i>
                                Order Not Delivered
                            </div>
                            <div class="priority priority-high">High Priority</div>
                        </div>
                        <div class="ticket-customer">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Customer">
                            <span>Sarah Johnson</span>
                        </div>
                        <div class="ticket-excerpt">
                            My order #ORD-7841 was supposed to be delivered yesterday but hasn't arrived. Can you please check the status?
                        </div>
                        <div class="ticket-meta">
                            <span><i class="far fa-clock"></i> 2 hours ago</span>
                            <span class="status-badge status-open">Open</span>
                            <span>#TKT-7841</span>
                        </div>
                    </div>
                    
                    <!-- Ticket Item 2 -->
                    <div class="ticket-item">
                        <div class="ticket-header">
                            <div class="ticket-title">
                                <i class="fas fa-circle text-warning"></i>
                                Product Quality Issue
                            </div>
                            <div class="priority priority-medium">Medium Priority</div>
                        </div>
                        <div class="ticket-customer">
                            <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Customer">
                            <span>Michael Brown</span>
                        </div>
                        <div class="ticket-excerpt">
                            The mangoes I received were not ripe and some were bruised. I would like a refund for the damaged items.
                        </div>
                        <div class="ticket-meta">
                            <span><i class="far fa-clock"></i> 5 hours ago</span>
                            <span class="status-badge status-pending">Pending</span>
                            <span>#TKT-7839</span>
                        </div>
                    </div>
                    
                    <!-- Ticket Item 3 -->
                    <div class="ticket-item">
                        <div class="ticket-header">
                            <div class="ticket-title">
                                <i class="fas fa-circle text-success"></i>
                                Payment Method Question
                            </div>
                            <div class="priority priority-low">Low Priority</div>
                        </div>
                        <div class="ticket-customer">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Customer">
                            <span>Emma Davis</span>
                        </div>
                        <div class="ticket-excerpt">
                                Can I use multiple payment methods for a single order? I want to split between bKash and credit card.
                        </div>
                        <div class="ticket-meta">
                            <span><i class="far fa-clock"></i> Yesterday</span>
                            <span class="status-badge status-open">Open</span>
                            <span>#TKT-7838</span>
                        </div>
                    </div>
                    
                    <!-- Ticket Item 4 -->
                    <div class="ticket-item">
                        <div class="ticket-header">
                            <div class="ticket-title">
                                <i class="fas fa-circle text-warning"></i>
                                Account Verification Issue
                            </div>
                            <div class="priority priority-medium">Medium Priority</div>
                        </div>
                        <div class="ticket-customer">
                            <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Customer">
                            <span>James Wilson</span>
                        </div>
                        <div class="ticket-excerpt">
                            I'm having trouble verifying my farmer account. The documents I uploaded keep getting rejected.
                        </div>
                        <div class="ticket-meta">
                            <span><i class="far fa-clock"></i> 2 days ago</span>
                            <span class="status-badge status-pending">Pending</span>
                            <span>#TKT-7835</span>
                        </div>
                    </div>
                    
                    <!-- Ticket Item 5 -->
                    <div class="ticket-item">
                        <div class="ticket-header">
                            <div class="ticket-title">
                                <i class="fas fa-circle text-danger"></i>
                                Wrong Item Delivered
                            </div>
                            <div class="priority priority-high">High Priority</div>
                        </div>
                        <div class="ticket-customer">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Customer">
                            <span>Olivia Taylor</span>
                        </div>
                        <div class="ticket-excerpt">
                            I ordered 2kg of Ilish fish but received Rohu instead. This is unacceptable as I needed it for a special occasion.
                        </div>
                        <div class="ticket-meta">
                            <span><i class="far fa-clock"></i> 3 days ago</span>
                            <span class="status-badge status-open">Open</span>
                            <span>#TKT-7832</span>
                        </div>
                    </div>
                    
                    <!-- Ticket Item 6 -->
                    <div class="ticket-item">
                        <div class="ticket-header">
                            <div class="ticket-title">
                                <i class="fas fa-circle text-success"></i>
                                Bulk Order Inquiry
                            </div>
                            <div class="priority priority-low">Low Priority</div>
                        </div>
                        <div class="ticket-customer">
                            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Customer">
                            <span>Robert Martinez</span>
                        </div>
                        <div class="ticket-excerpt">
                            I run a restaurant and would like to place regular bulk orders. Do you offer special pricing for businesses?
                        </div>
                        <div class="ticket-meta">
                            <span><i class="far fa-clock"></i> 4 days ago</span>
                            <span class="status-badge status-resolved">Resolved</span>
                            <span>#TKT-7829</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="ticket-detail">
                <div class="ticket-header-detail">
                    <h2>Order Not Delivered</h2>
                    <div class="ticket-meta-detail">
                        <div class="meta-item">
                            <i class="fas fa-user"></i>
                            <span>Sarah Johnson</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-tag"></i>
                            <span>Shipping Issue</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-ticket-alt"></i>
                            <span>#TKT-7841</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-shopping-cart"></i>
                            <span>Order #ORD-7841</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-clock"></i>
                            <span>Created: Today, 10:24 AM</span>
                        </div>
                    </div>
                    <div class="priority priority-high">High Priority</div>
                </div>
                
                <div class="ticket-body">
                    <!-- Customer Message -->
                    <div class="message">
                        <div class="message-header">
                            <div class="message-user">
                                <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Customer">
                                <div class="message-user-info">
                                    <div class="name">Sarah Johnson</div>
                                    <div class="role">Customer</div>
                                </div>
                            </div>
                            <div class="message-time">Today, 10:24 AM</div>
                        </div>
                        <div class="message-content">
                            <p>Hello,</p>
                            <p>My order #ORD-7841 was scheduled for delivery yesterday (October 15) but hasn't arrived yet. The tracking information hasn't been updated since the morning of the 15th, showing "Out for delivery".</p>
                            <p>This order contains perishable items including fresh fish and vegetables that I needed for a family gathering tonight. Can you please check what happened and when I can expect delivery?</p>
                            <p>Thank you,<br>Sarah Johnson</p>
                        </div>
                    </div>
                    
                    <!-- Admin Reply -->
                    <div class="message admin-reply">
                        <div class="message-header">
                            <div class="message-user">
                                <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="Admin">
                                <div class="message-user-info">
                                    <div class="name">Alex Morgan</div>
                                    <div class="role">Support Agent</div>
                                </div>
                            </div>
                            <div class="message-time">Today, 11:05 AM</div>
                        </div>
                        <div class="message-content">
                            <p>Dear Sarah,</p>
                            <p>Thank you for reaching out to us. I apologize for the inconvenience you've experienced with your order.</p>
                            <p>I've checked with our logistics team and found that your delivery was delayed due to unexpected vehicle issues. The delivery has been rescheduled for today between 2-4 PM.</p>
                            <p>As compensation for the delay, we've applied a 15% discount to your order which will be refunded to your original payment method.</p>
                            <p>I'll personally monitor the delivery status and update you if there are any further changes. You can track your order in real-time using this link: <a href="#">Track Order #ORD-7841</a></p>
                            <p>Please accept our sincere apologies for this inconvenience.</p>
                        </div>
                    </div>
                </div>
                
                <div class="reply-section">
                    <h3>Reply to Customer</h3>
                    <textarea placeholder="Type your response here..."></textarea>
                    <div class="form-actions">
                        <button class="btn btn-outline">Save Draft</button>
                        <button class="btn btn-resolve">Mark as Resolved</button>
                        <button class="btn btn-primary">Send Reply</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Highlight active filter
            const filterBtns = document.querySelectorAll('.filter-btn');
            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    filterBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                });
            });
            
            // Ticket selection
            const ticketItems = document.querySelectorAll('.ticket-item');
            ticketItems.forEach(item => {
                item.addEventListener('click', function() {
                    ticketItems.forEach(i => i.classList.remove('active'));
                    this.classList.add('active');
                    
                    // In a real app, this would load the ticket details
                    document.querySelector('.ticket-header-detail h2').textContent = 
                        this.querySelector('.ticket-title').textContent.replace('●', '').trim();
                });
            });
            
            // Send reply functionality
            const sendBtn = document.querySelector('.btn-primary');
            sendBtn.addEventListener('click', function() {
                const textarea = document.querySelector('textarea');
                if(textarea.value.trim() === '') {
                    alert('Please enter your response');
                    return;
                }
                
                // In a real app, this would send the reply to the server
                alert('Your response has been sent successfully!');
                textarea.value = '';
            });
            
            // Mark as resolved
            const resolveBtn = document.querySelector('.btn-resolve');
            resolveBtn.addEventListener('click', function() {
                if(confirm('Mark this ticket as resolved?')) {
                    // Update UI
                    document.querySelector('.status-badge.status-open').className = 'status-badge status-resolved';
                    document.querySelector('.status-badge.status-open').textContent = 'Resolved';
                    
                    // Show confirmation
                    alert('Ticket marked as resolved!');
                }
            });
        });
    </script>
</body>
</html>