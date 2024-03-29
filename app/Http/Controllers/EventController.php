<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Event;
use Illuminate\View\View;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $events = Event::all();
       return view ('events.index')->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function create(): View
{
    return view('events.create');
}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Event::create($input);
        return redirect('events')->with('flash_message', 'Event Added!');
    }


    public function show(string $id): View
    {
        $event = Event::find($id);
        return view('events.show')->with('events', $event);
    }


    public function edit(string $id): View
    {
        $event = Event::find($id);
        return view('events.edit')->with('events', $event);
    }




    public function update(Request $request, string $id): RedirectResponse
    {
        $event = Event::find($id);
        $input = $request->all();
        $event->update($input);
        return redirect('events')->with('flash_message', 'Event Updated!');
    }


    public function destroy(string $id): RedirectResponse
    {
        Event::destroy($id);
        return redirect('events')->with('flash_message', 'Event deleted!');
    }


    public function search(Request $request)
    {
        $searchQuery = $request->input('search');

        // Using Eloquent's where method with a closure for more flexibility
        $events = Event::where(function ($query) use ($searchQuery) {
            $query->where('regnum', 'LIKE', "%$searchQuery%")
                ->orWhere('brand', 'LIKE', "%$searchQuery%")
                ->orWhere('type', 'LIKE', "%$searchQuery%")
                ->orWhere('manudate', 'LIKE', "%$searchQuery%")
                ->orWhere('regdate', 'LIKE', "%$searchQuery%")
                ->orWhere('used', 'LIKE', "%$searchQuery%")
                ->orWhere('capacity', 'LIKE', "%$searchQuery%")
                ->orWhere('value', 'LIKE', "%$searchQuery%")
                ->orWhere('mileage', 'LIKE', "%$searchQuery%")
                ->orWhere('category', 'LIKE', "%$searchQuery%")
                ->orWhere('own_ministry', 'LIKE', "%$searchQuery%")
                ->orWhere('assigned', 'LIKE', "%$searchQuery%")
                ->orWhere('status', 'LIKE', "%$searchQuery%")
                ->orWhere('assigned_person', 'LIKE', "%$searchQuery%")
                ->orWhere('assigned_position', 'LIKE', "%$searchQuery%");
            // Add more conditions as needed
        })->get();

        // Pass the count directly to the view
        return view('events.index', compact('events', 'searchQuery'))->with('resultCount', $events->count());
    }

}
