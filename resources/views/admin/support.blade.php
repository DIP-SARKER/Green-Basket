@extends('admin.dashboard')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/dip/support.css') }}">
@endpush

@push('title')
    <h1>Support</h1>
@endpush

@section('dashboard-content')
    <div class="support-container">
        <!-- Ticket List -->
        <div class="ticket-list">
            <div class="ticket-filters">
                <div class="filter-group">
                    <button class="filter-btn active" data-status="all">All Tickets</button>
                    <button class="filter-btn" data-status="open">Open</button>
                    <button class="filter-btn" data-status="pending">Pending</button>
                    <button class="filter-btn" data-status="resolved">Resolved</button>
                </div>
            </div>

            <div class="tickets">
                @foreach ($tickets as $ticket)
                    <div class="ticket-item {{ $loop->first ? 'active' : '' }}" data-id="{{ $ticket->id }}">
                        <div class="ticket-header">
                            <div class="ticket-title">
                                <i
                                    class="fas fa-circle text-{{ $ticket->priority == 'high' ? 'danger' : ($ticket->priority == 'medium' ? 'warning' : 'success') }}"></i>
                                {{ $ticket->subject }}
                            </div>
                            <div class="priority priority-{{ $ticket->priority }}">{{ ucfirst($ticket->priority) }} Priority
                            </div>
                        </div>
                        <div class="ticket-customer">
                            <img src="{{ $ticket->customer_image }}" alt="Customer">
                            <span>{{ $ticket->customer_name }}</span>
                        </div>
                        <div class="ticket-excerpt">{{ $ticket->excerpt }}</div>
                        <div class="ticket-meta">
                            <span><i class="far fa-clock"></i>
                                {{ \Carbon\Carbon::parse($ticket->submitted_at)->diffForHumans() }}</span>
                            <span class="status-badge status-{{ $ticket->status }}">{{ ucfirst($ticket->status) }}</span>
                            <span>#{{ $ticket->ticket_id }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Ticket Detail Container -->
        <div class="ticket-detail" id="ticket-detail">
            <p>Select a ticket to view details.</p>
        </div>
    </div>
@endsection

@push('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ticketItems = document.querySelectorAll('.ticket-item');
            const ticketDetail = document.getElementById('ticket-detail');

            ticketItems.forEach(item => {
                item.addEventListener('click', function() {
                    // Highlight active ticket
                    ticketItems.forEach(i => i.classList.remove('active'));
                    this.classList.add('active');

                    const ticketId = this.dataset.id;

                    fetch(`/admin/support-tickets/${ticketId}`)
                        .then(response => response.json())
                        .then(data => {
                            const ticket = data.ticket;

                            // Build replies HTML
                            let repliesHtml = ticket.replies.map(reply => {
                                const isAdmin = reply.sender_type === 'admin';
                                const userName = isAdmin ? 'Support Admin' : ticket
                                    .customer_name;
                                const userRole = isAdmin ? 'Support Agent' : 'Customer';
                                const userImg = isAdmin ?
                                    'https://dip-sarker.github.io/DIP_SARKER/images/home.png' :
                                    ticket.customer_image;
                                const messageClass = isAdmin ? 'admin-reply' :
                                    'customer-reply';

                                return `
                            <div class="message ${messageClass}">
                                <div class="message-header">
                                    <div class="message-user">
                                        <img src="${userImg}" alt="${userName}">
                                        <div class="message-user-info">
                                            <div class="name">${userName}</div>
                                            <div class="role">${userRole}</div>
                                        </div>
                                    </div>
                                    <div class="message-time">${new Date(reply.created_at).toLocaleString()}</div>
                                </div>
                                <div class="message-content">${reply.message.replace(/\n/g, '<br>')}</div>
                            </div>
                        `;
                            }).join('');

                            // Render ticket detail
                            ticketDetail.innerHTML = `
                        <div class="ticket-header-detail">
                            <h2>${ticket.subject}</h2>
                            <div class="ticket-meta-detail">
                                <div class="meta-item"><i class="fas fa-user"></i> <span>${ticket.customer_name}</span></div>
                                <div class="meta-item"><i class="fas fa-tag"></i> <span>${ticket.tag}</span></div>
                                <div class="meta-item"><i class="fas fa-ticket-alt"></i> <span>#${ticket.ticket_id}</span></div>
                                <div class="meta-item"><i class="fas fa-shopping-cart"></i> <span>Order #${ticket.order_id}</span></div>
                                <div class="meta-item"><i class="fas fa-clock"></i> <span>Created: ${new Date(ticket.submitted_at).toLocaleString()}</span></div>
                            </div>
                            <div class="priority priority-${ticket.priority}">${ticket.priority.charAt(0).toUpperCase() + ticket.priority.slice(1)} Priority</div>
                        </div>

                        <div class="ticket-body">
                            <div class="message customer-reply">
                                <div class="message-header">
                                    <div class="message-user">
                                        <img src="${ticket.customer_image}" alt="${ticket.customer_name}">
                                        <div class="message-user-info">
                                            <div class="name">${ticket.customer_name}</div>
                                            <div class="role">Customer</div>
                                        </div>
                                    </div>
                                    <div class="message-time">${new Date(ticket.submitted_at).toLocaleString()}</div>
                                </div>
                                <div class="message-content">${ticket.full_message.replace(/\n/g, '<br>')}</div>
                            </div>
                            ${repliesHtml}
                        </div>

                        <div class="reply-section">
                            <h3>Reply to Customer</h3>
                            <form method="POST" action="/admin/support-tickets/${ticket.id}/reply">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <textarea name="message" placeholder="Type your response here..." required></textarea>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">Send Reply</button>
                                </div>
                            </form>
                            <form method="POST" action="/admin/support-tickets/${ticket.id}/resolve" style="display:inline;">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-resolve">Mark as Resolved</button>
                            </form>
                        </div>
                    `;
                        })
                        .catch(error => {
                            ticketDetail.innerHTML =
                                `<p class="error">Failed to load ticket details.</p>`;
                            console.error(error);
                        });
                });
            });

            // Filter buttons
            const filterBtns = document.querySelectorAll('.filter-btn');

            // Get current status from query string
            const urlParams = new URLSearchParams(window.location.search);
            const currentStatus = urlParams.get('status') || 'all';

            // Set active class
            filterBtns.forEach(btn => {
                if (btn.dataset.status === currentStatus) {
                    btn.classList.add('active');
                } else {
                    btn.classList.remove('active');
                }

                btn.addEventListener('click', function() {
                    const status = btn.dataset.status;
                    window.location.href = `?status=${status}`;
                });
            });
        });
    </script>
@endpush
