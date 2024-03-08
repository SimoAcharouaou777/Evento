<?php

namespace App\Http\Controllers\Organizer\events;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GetTicketController extends Controller
{
    public function getTicket($id)
    {
        $user = Auth::user(); 
        $event = Event::find($id);
        $status = 'reserved';

        if ($user->events()->where('event_id', $event->id)->exists()) {
            return redirect()->back()->with('error', 'You have already reserved a ticket for this event.');
        }
        if ($event->type == 'auto') {
            $event->available_seats = $event->available_seats - 1;
            $event->save(); 
            $user->events()->attach($event->id, ['status' => $status]);
            $pdf = Pdf::loadView('pdf', ['user'=>$user]);
            session()->flash('success', 'Ticket reservation successful!');
            return $pdf->download('invoice.pdf');
          
        }else {
            $user->events()->attach($event->id, ['status' => 'pending']);
            session()->flash('info', 'Ticket reservation is pending approval.');
            return redirect()->back();
        }
        
        
    }

    public function downloadTicket(Event $event)
    {
        $user = Auth::user();
        $status = 'reserved';
        $event->users()->updateExistingPivot($user, ['status' => $status]);
        $pdf = Pdf::loadView('pdf', ['user'=>$user]);
        return $pdf->download('invoice.pdf');
    }
}
