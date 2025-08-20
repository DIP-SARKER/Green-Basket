<?php


namespace App\Http\Controllers;

use App\Models\SupportTicket;
use App\Models\SupportReply;
use Illuminate\Http\Request;

class SupportTicketController extends Controller
{
    // Show support tickets page
    public function index(Request $request)
    {
        $statusFilter = $request->query('status');

        $tickets = SupportTicket::when($statusFilter && $statusFilter != 'all', function ($q) use ($statusFilter) {
            $q->where('status', $statusFilter);
        })->orderBy('submitted_at', 'desc')->get();

        return view('admin.support', compact('tickets'));
    }

    // Show single ticket details (optional AJAX)
    public function show($id)
    {
        $ticket = SupportTicket::with('replies')->findOrFail($id);
        return response()->json(['ticket' => $ticket]);
    }

    public function reply(Request $request, $id)
    {
        $request->validate(['message' => 'required']);
        SupportReply::create([
            'support_ticket_id' => $id,
            'message' => $request->message,
        ]);
        return back()->with('success', 'Reply sent.');
    }

    public function resolve($id)
    {
        $ticket = SupportTicket::findOrFail($id);
        $ticket->status = 'resolved';
        $ticket->save();

        return back()->with('success', 'Ticket marked as resolved.');
    }

    public function storeFromCustomer(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $ticket = SupportTicket::create([
            'customer_id' => 1,
            'ticket_id' => 'TKT-' . strtoupper(uniqid()),
            'subject' => $request->subject,
            'priority' => 'medium',
            'status' => 'open',
            'customer_name' => $request->customer_name,
            'customer_image' => 'https://randomuser.me/api/portraits/lego/1.jpg',
            'tag' => 'Customer Contact',
            'excerpt' => \Str::limit($request->message, 100),
            'full_message' => $request->message,
            'submitted_at' => now(),
        ]);

        return back()->with('success', 'Your message has been submitted. We will get back to you soon.');
    }


}
