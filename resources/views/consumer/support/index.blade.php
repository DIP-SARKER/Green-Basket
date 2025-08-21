@extends('index')
<style>
    /* ========== Global Styling ========== */
    /* ========== Global Styling ========== */
    body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        background: #f5f7fb;
        color: #333;
        margin: 0;
        padding: 0;
    }

    h2 {
        margin-bottom: 15px;
        font-size: 20px;
        font-weight: 600;
        color: #2c3e50;
    }

    /* ========== Container Layout ========== */
    .support-container {
        display: flex;
        gap: 20px;
        padding: 20px;
        max-width: 1300px;
        margin: auto;
        flex-wrap: wrap;
        /* responsive */
    }

    /* ========== Ticket Creation Form ========== */
    .create-ticket {
        flex: 1 1 300px;
        /* allows shrinking/growing */
        background: #fff;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: 500;
        margin-bottom: 6px;
        color: #444;
    }

    input[type="text"],
    select,
    textarea {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #dcdcdc;
        border-radius: 8px;
        font-size: 14px;
        outline: none;
        transition: border 0.3s;
    }

    input:focus,
    select:focus,
    textarea:focus {
        border-color: #3498db;
    }

    .btn {
        padding: 10px 18px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 600;
        transition: 0.3s;
    }

    .btn-primary {
        background: #3498db;
        color: #fff;
    }

    .btn-primary:hover {
        background: #2980b9;
    }

    /* ========== Ticket List & Details ========== */
    .ticket-list-container {
        display: flex;
        flex: 2 1 650px;
        /* wider space for tickets/details */
        gap: 20px;
        flex-wrap: wrap;
    }

    .ticket-list {
        flex: 1 1 250px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        padding: 20px;
        max-height: 80vh;
        overflow-y: auto;
    }

    .ticket-detail {
        flex: 2 1 400px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        padding: 20px;
        max-height: 80vh;
        overflow-y: auto;
    }

    /* Ticket items */
    .ticket-item {
        border-bottom: 1px solid #eee;
        padding: 12px 10px;
        cursor: pointer;
        border-radius: 8px;
        transition: background 0.3s;
    }

    .ticket-item:hover {
        background: #f8faff;
    }

    .ticket-item.active {
        background: #eaf4ff;
        border-left: 4px solid #3498db;
        padding-left: 14px;
    }

    .ticket-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .ticket-title {
        font-weight: 600;
        font-size: 15px;
    }

    .ticket-excerpt {
        font-size: 13px;
        color: #666;
        margin-top: 4px;
    }

    .ticket-meta {
        display: flex;
        justify-content: space-between;
        font-size: 12px;
        color: #999;
        margin-top: 6px;
    }

    /* Status badges */
    .status-badge {
        padding: 4px 10px;
        border-radius: 12px;
        font-size: 12px;
        font-weight: 600;
        text-transform: capitalize;
    }

    .status-open {
        background: #eaf7ff;
        color: #2980b9;
    }

    .status-pending {
        background: #fff4e6;
        color: #d35400;
    }

    .status-resolved {
        background: #eafaf1;
        color: #27ae60;
    }

    /* ========== Ticket Details ========== */
    .ticket-header-detail {
        border-bottom: 1px solid #eee;
        padding-bottom: 12px;
        margin-bottom: 15px;
    }

    .ticket-meta-detail {
        display: flex;
        gap: 15px;
        font-size: 13px;
        color: #666;
        margin-top: 8px;
    }

    .priority {
        font-size: 12px;
        font-weight: 600;
        margin-top: 6px;
    }

    .priority-low {
        color: #27ae60;
    }

    .priority-medium {
        color: #f39c12;
    }

    .priority-high {
        color: #e74c3c;
    }

    /* ========== Messages ========== */
    .message {
        background: #f9fafc;
        padding: 12px;
        border-radius: 10px;
        margin-bottom: 12px;
    }

    .message-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 8px;
    }

    .message-user {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .message-user img {
        width: 32px;
        height: 32px;
        border-radius: 50%;
    }

    .message-user-info {
        font-size: 13px;
    }

    .message-user-info .name {
        font-weight: 600;
    }

    .message-user-info .role {
        font-size: 11px;
        color: #777;
    }

    .message-time {
        font-size: 12px;
        color: #aaa;
    }

    .message-content {
        font-size: 14px;
        color: #333;
    }

    /* Differentiate replies */
    .admin-reply {
        background: #eaf4ff;
        border-left: 3px solid #3498db;
    }

    .customer-reply {
        background: #f0fdf4;
        border-left: 3px solid #27ae60;
    }

    /* Reply section */
    .reply-section textarea {
        width: 100%;
        border-radius: 8px;
        border: 1px solid #ddd;
        padding: 10px;
        margin-bottom: 10px;
        resize: vertical;
    }

    .form-actions {
        text-align: right;
    }

    .resolved-msg {
        text-align: center;
        padding: 10px;
        font-weight: 600;
        color: #27ae60;
    }

    /* ========== Responsive Design ========== */
    @media (max-width: 900px) {
        .ticket-list-container {
            flex-direction: column;
        }

        .ticket-list,
        .ticket-detail {
            flex: 1 1 100%;
            max-height: none;
        }
    }
</style>
@section('main-content')
    <div class="support-container">
        <!-- Ticket Creation Form -->
        <div class="create-ticket">
            <h2>Create New Ticket</h2>
            <form method="POST" action="{{ route('support.store') }}">
                @csrf
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" id="subject" required>
                </div>

                <div class="form-group">
                    <label for="priority">Priority</label>
                    <select name="priority" id="priority" required>
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tag">Tag</label>
                    <input type="text" name="tag" id="tag" required>
                </div>
                <div class="form-group">
                    <label for="order_id">Order ID</label>
                    <input type="text" name="order_id" id="order_id">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="4" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit Ticket</button>
            </form>
        </div>

        <div class="ticket-list-container">
            <!-- Ticket List -->
            <div class="ticket-list">
                <h2>My Tickets</h2>
                @forelse ($tickets as $ticket)
                    <div class="ticket-item {{ $loop->first ? 'active' : '' }}" data-id="{{ $ticket->id }}">
                        <div class="ticket-header">
                            <div class="ticket-title">
                                <i
                                    class="fas fa-circle text-{{ $ticket->priority == 'high' ? 'danger' : ($ticket->priority == 'medium' ? 'warning' : 'success') }}"></i>
                                {{ $ticket->subject }}
                            </div>
                            <span class="status-badge status-{{ $ticket->status }}">{{ ucfirst($ticket->status) }}</span>
                        </div>
                        <div class="ticket-excerpt">{{ $ticket->excerpt }}</div>
                        <div class="ticket-meta">
                            <span><i class="far fa-clock"></i>
                                {{ \Carbon\Carbon::parse($ticket->submitted_at)->diffForHumans() }}</span>
                            <span>#{{ $ticket->ticket_id }}</span>
                        </div>
                    </div>
                @empty
                    <p>No tickets submitted yet.</p>
                @endforelse
            </div>

            <!-- Ticket Detail Container -->
            <div class="ticket-detail" id="ticket-detail">
                <p>Select a ticket to view details.</p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ticketItems = document.querySelectorAll('.ticket-item');
            const ticketDetail = document.getElementById('ticket-detail');

            ticketItems.forEach(item => {
                item.addEventListener('click', function() {
                    ticketItems.forEach(i => i.classList.remove('active'));
                    this.classList.add('active');

                    const ticketId = this.dataset.id;

                    fetch(`/support-tickets/${ticketId}`)
                        .then(response => response.json())
                        .then(data => {
                            const ticket = data.ticket;

                            // Build replies HTML
                            let repliesHtml = ticket.replies.map(reply => {
                                const isAdmin = reply.sender_type === 'admin';
                                const userName = isAdmin ? 'Support Team' : ticket
                                    .customer_name;
                                const userRole = isAdmin ? 'Support Agent' : 'You';
                                const userImg = isAdmin ?
                                    '' :
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
                                    <div class="meta-item"><i class="fas fa-ticket-alt"></i> <span>#${ticket.ticket_id}</span></div>
                                    <div class="meta-item"><i class="fas fa-clock"></i> <span>Created: ${new Date(ticket.submitted_at).toLocaleString()}</span></div>
                                    <span class="status-badge status-${ticket.status}">${ticket.status}</span>
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
                                                <div class="role">You</div>
                                            </div>
                                        </div>
                                        <div class="message-time">${new Date(ticket.submitted_at).toLocaleString()}</div>
                                    </div>
                                    <div class="message-content">${ticket.full_message.replace(/\n/g, '<br>')}</div>
                                </div>
                                ${repliesHtml}
                            </div>

                            ${ticket.status !== 'resolved' ? `
                                                <div class="reply-section">
                                                    <h3>Reply to Support</h3>
                                                    <form method="POST" action="/support-tickets/${ticket.id}/reply">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <textarea name="message" placeholder="Type your reply here..." required></textarea>
                                                        <div class="form-actions">
                                                            <button type="submit" class="btn btn-primary">Send Reply</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            ` : `<p class="resolved-msg">This ticket is marked as resolved.</p>`}
                        `;
                        })
                        .catch(error => {
                            ticketDetail.innerHTML =
                                `<p class="error">Failed to load ticket details.</p>`;
                            console.error(error);
                        });
                });
            });
        });
    </script>
@endsection
