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
        $event->users()->updateExistingPivot($user, ['status' => 'accepted']);
        return redirect()->back();
    }
}
