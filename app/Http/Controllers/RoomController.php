<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Room;
use App\Models\Allvehicle;
use Illuminate\View\View;


class RoomController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
        $rooms = Room::all();
        return view ('rooms.index')->with('rooms', $rooms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        return view('rooms.create');
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
        Room::create($input);
        return redirect('rooms')->with('flash_message', 'Room Added!');
    }


    public function show(string $id): View
    {
        $room = Room::find($id);
        return view('rooms.show')->with('rooms', $room);
    }


    public function edit(string $id): View
    {

        $room = Room::find($id);
        return view('rooms.edit')->with('rooms', $room);
    }


    public function update(Request $request, string $id): RedirectResponse
    {
        $room = Room::find($id);
        $input = $request->all();
        $room->update($input);
        return redirect('rooms')->with('flash_message', 'Room Updated!');
    }


    public function destroy(string $id): RedirectResponse
    {
        Room::destroy($id);
        return redirect('rooms')->with('flash_message', 'Room deleted!');
    }

    public function search(Request $request)
    {
        $searchQuery = $request->input('search');

        // Using Eloquent's where method with a closure for more flexibility
        $rooms = Room::where(function ($query) use ($searchQuery) {
            $query->where('regnum', 'LIKE', "%$searchQuery%")
                ->orWhere('name', 'LIKE', "%$searchQuery%")
                ->orWhere('mobile', 'LIKE', "%$searchQuery%");
            // Add more conditions as needed
        })->get();

        // Pass the count directly to the view
        return view('rooms.index', compact('rooms', 'searchQuery'))->with('resultCount', $rooms->count());
    }

}
