 @extends('admin.dashboard')
 @push('style')
     <link rel="stylesheet" href="{{ asset('css/dip/support.css') }}">
 @endpush
 @push('title')
     <h1>Support</h1>
 @endpush
 @section('dashboard-content')
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
                 @foreach ($tickets as $ticket)
                     <div class="ticket-item {{ $loop->first ? 'active' : '' }}">
                         <div class="ticket-header">
                             <div class="ticket-title">
                                 <i
                                     class="fas fa-circle text-{{ $ticket->priority == 'high' ? 'danger' : ($ticket->priority == 'medium' ? 'warning' : 'success') }}"></i>
                                 {{ $ticket->subject }}
                             </div>
                             <div class="priority priority-{{ $ticket->priority }}">{{ ucfirst($ticket->priority) }}
                                 Priority</div>
                         </div>
                         <div class="ticket-customer">
                             <img src="{{ $ticket->customer_image }}" alt="Customer">
                             <span>{{ $ticket->customer_name }}</span>
                         </div>
                         <div class="ticket-excerpt">
                             {{ $ticket->excerpt }}
                         </div>
                         <div class="ticket-meta">
                             <span><i class="far fa-clock"></i> {{ $ticket->submitted_at->diffForHumans() }}</span>
                             <span class="status-badge status-{{ $ticket->status }}">{{ ucfirst($ticket->status) }}</span>
                             <span>#{{ $ticket->ticket_id }}</span>
                         </div>
                     </div>
                 @endforeach
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
                         <p>My order #ORD-7841 was scheduled for delivery yesterday (October 15) but hasn't arrived yet. The
                             tracking information hasn't been updated since the morning of the 15th, showing "Out for
                             delivery".</p>
                         <p>This order contains perishable items including fresh fish and vegetables that I needed for a
                             family gathering tonight. Can you please check what happened and when I can expect delivery?
                         </p>
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
                         <p>Thank you for reaching out to us. I apologize for the inconvenience you've experienced with your
                             order.</p>
                         <p>I've checked with our logistics team and found that your delivery was delayed due to unexpected
                             vehicle issues. The delivery has been rescheduled for today between 2-4 PM.</p>
                         <p>As compensation for the delay, we've applied a 15% discount to your order which will be refunded
                             to your original payment method.</p>
                         <p>I'll personally monitor the delivery status and update you if there are any further changes. You
                             can track your order in real-time using this link: <a href="#">Track Order #ORD-7841</a>
                         </p>
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
 @endsection
 @push('script')
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
                 if (textarea.value.trim() === '') {
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
                 if (confirm('Mark this ticket as resolved?')) {
                     // Update UI
                     document.querySelector('.status-badge.status-open').className =
                         'status-badge status-resolved';
                     document.querySelector('.status-badge.status-open').textContent = 'Resolved';

                     // Show confirmation
                     alert('Ticket marked as resolved!');
                 }
             });
         });
     </script>
 @endpush
