<?php

namespace App\Http\Controllers;

use App\Models\SupportTicket;
use Illuminate\Http\Request;

class SupportTicketController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->get('status'); // optional filter
        $tickets = SupportTicket::when($status, function ($query) use ($status) {
            return $query->where('status', $status);
        })
            ->orderByDesc('submitted_at')
            ->get();

        return view('admin.support', compact('tickets'));
    }

    public function show($ticket_id)
    {
        $ticket = SupportTicket::where('ticket_id', $ticket_id)->firstOrFail();
        return view('admin.support.show', compact('ticket'));
    }

    public function reply(Request $request, $ticket_id)
    {
        // Handle sending reply (e.g. storing message log, sending email)
        // This depends on how you want to store replies
        return redirect()->back()->with('success', 'Reply sent successfully.');
    }

    public function resolve($ticket_id)
    {
        $ticket = SupportTicket::where('ticket_id', $ticket_id)->firstOrFail();
        $ticket->update(['status' => 'resolved']);

        return redirect()->back()->with('success', 'Ticket marked as resolved.');
    }
}

