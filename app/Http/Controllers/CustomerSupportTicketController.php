<?php

namespace App\Http\Controllers;

use App\Models\SupportTicket;
use App\Models\SupportReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CustomerSupportTicketController extends Controller
{
    /**
     * Show all tickets for the logged-in customer.
     */
    public function index()
    {
        $tickets = SupportTicket::where('customer_id', auth('customer')->id()) // filter by logged-in user
            ->orderBy('submitted_at', 'desc')
            ->get();
        return view('consumer.support.index', compact('tickets'));
    }
    /**
     * Store a new support ticket.
     */
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'priority' => 'required|in:low,medium,high',
            'message' => 'required|string',
        ]);

        $ticket = SupportTicket::create([
            'ticket_id' => strtoupper(Str::random(8)), // unique ticket id
            'customer_id' => auth('customer')->id(),
            'customer_name' => auth('customer')->user()->name,
            'customer_image' => auth('customer')->user()->profile_photo_url ?? '/images/default-avatar.png',
            'tag' => $request->tag,
            'order_id' => $request->order_id,
            'subject' => $request->subject,
            'priority' => $request->priority,
            'excerpt' => Str::limit($request->message, 80),
            'full_message' => $request->message,
            'status' => 'open',
            'submitted_at' => Carbon::now(),
        ]);

        return redirect()->route('support.index')
            ->with('success', 'Your ticket has been submitted successfully.');
    }

    /**
     * Show single ticket details with replies (AJAX)
     */
    public function show($id)
    {
        $ticket = SupportTicket::with('replies')
            ->where('customer_id', auth('customer')->id())
            ->findOrFail($id);

        return response()->json(['ticket' => $ticket]);
    }

    /**
     * Reply to an existing ticket
     */
    public function reply(Request $request, $id)
    {
        $ticket = SupportTicket::where('customer_id', auth('customer')->id())
            ->findOrFail($id);

        $request->validate([
            'message' => 'required|string',
        ]);

        SupportReply::create([
            'support_ticket_id' => $ticket->id,
            'message' => $request->message,
            'sender_type' => 'customer',
        ]);

        return back()->with('success', 'Your reply has been sent.');
    }
}
