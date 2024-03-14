<?php

namespace App\Http\Controllers\Organizer\events;

use App\Http\Controllers\Controller;
use App\Models\Event;


class PartisipantController extends Controller
{
    public function index()
    {
        $reservations = Event::whereHas('users', function ($query) {
            $query->where('event_user.status', 'pending');
        })->with('users')->get();
        return view('organizer.participant', compact('reservations'));
    }
    
    public function acceptRequest(Event $event, $user)
    {
        if($event->available_seats == 0){
            return redirect()->back()->with('error', 'No seats available');
        }
        $event->available_seats = $event->available_seats - 1;
        $event->users()->updateExistingPivot($user, ['status' => 'accepted']);
        $event->save();
        return redirect()->back()->with('success', 'Request accepted');
    }

    public function denieRequest(Event $event, $user)
    {
        $event->users()->updateExistingPivot($user, ['status' => 'denied']);
        return redirect()->back()->with('success', 'Request denied');
    }
}
