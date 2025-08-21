<?php


namespace App\Http\Controllers;

use App\Models\SupportTicket;
use App\Models\SupportReply;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

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

}
