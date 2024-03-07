<?php

namespace App\Http\Controllers\Organizer\events;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $organizerId = auth()->id();
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'location' => 'required',
            'available_seats' => 'required',
            'category' => 'required',
            'ticketOption' => 'required|in:auto,manual',
            
        ]);
        $data['category_id'] = $request->input('category');
        $data['organizer_id'] = $organizerId;
        $data['type'] = $request->input('ticketOption');
        $events = Event::create($data);
        if($request->hasFile('image')){
            $events->addMediaFromRequest('image')->toMediaCollection('media/events','media_events');

        }


       
        return redirect(route('organizer.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $organizerId = auth()->id();
        $event = Event::find($id);
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'location' => 'required',
            'available_seats' => 'required',
            'category' => 'required',
        ]);
        $data['status'] = 'pending';
        $data['category_id'] = $request->input('category');
        $data['organizer_id'] = $organizerId;
        $event->update($data);
        
        if ($request->hasFile('image')) {
            $event->clearMediaCollection('media/events');
            $event->addMediaFromRequest('image')->toMediaCollection('media/events', 'media_events');
        }
        
        return redirect(route('organizer.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::find($id);
        $event->delete();
         return redirect()->back();
        
    }
}
