<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Http\Requests\StoreEventsRequest;
use App\Http\Requests\UpdateEventsRequest;
use Illuminate\Support\Facades\File;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Events::where("deleted_status", 0)->with('user')->get();
        return view("admin/events/index", ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin/events/add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventsRequest $request)
    {
        $is_validated = $request->validated();
        if ($is_validated) {
            $events = new Events();
            $fileName = time() . '_' . $request->file('poster_url')->getClientOriginalName();
            $request->file('poster_url')->storeAs('uploads/posters/', $fileName, 'public');
            $events->poster_url = time() . '_' . $request->file('poster_url')->getClientOriginalName();
            $events->title = $request->get('title');
            $events->date_event = $request->get('date_event');
            $events->from_hour = $request->get('from_hour');
            $events->to_hour = $request->get('to_hour');
            $events->location_event = $request->get('location_event');
            $events->description_event = $request->get('description_event');
            $events->created_by = 1;
            $events->deleted_status = 0;
            $events->save();
            return redirect("/events")->with("success", "Evenement Cree avec Success");
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Events $events)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Events $event)
    {
        //
        return view("admin/events/edit", ['event' => $event]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreEventsRequest $request, Events $event)
    {
        $updated_valid = $request->validated();
        if ($updated_valid) {
            if (request()->hasFile('poster_url')) {
                $imagePath = public_path('storage/uploads/posters/' . $event->poster_url);
                if (File::exists($imagePath)) {
                    unlink($imagePath);
                }
                $fileName = time() . '_' . $request->file('poster_url')->getClientOriginalName();
                $request->file('poster_url')->storeAs('uploads/posters', $fileName, 'public');
                $event->update([
                    'title' => request()->title,
                    'date_event' => request()->date_event,
                    'from_hour' => request()->from_hour,
                    'to_hour' => request()->to_hour,
                    'location_event' => request()->location_event,
                    'description_event' => request()->description_event,
                    'poster_url' => $fileName,
                ]);
            }
            return redirect("/events")->with("success", "Evenement Modifie avec Success");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Events $event)
    {
        $is = $event->update(['deleted_status' => 1]);
        if ($is) {
            return redirect("/events")->with("delete", "Evenement Supprime");
        }
    }
}
