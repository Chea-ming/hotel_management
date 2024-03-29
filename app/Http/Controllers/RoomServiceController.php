<?php

namespace App\Http\Controllers;

use App\Models\RoomService;
use App\Models\Guest;
use App\Models\Staff;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RoomServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $services = RoomService::with('guest')
            ->with('staff')
            ->paginate(6);
        return view ('services.index', compact('services'))
            ->with('i', (request()->input('page', 1) - 1) * 6);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(): View
    {
        $guests = Guest::all();
        $staff = Staff::all();
        return view('services.create')
            ->with('guest', $guests)
            ->with('staff', $staff);
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
        RoomService::create($input);
        return redirect('services')->with('flash_message', 'RoomService Added!');
    }


    public function show(string $id): View
    {
        $service = RoomService::find($id);
        return view('services.show')->with('service', $service);
    }


    public function edit(string $id): View
    {
        $service = RoomService::find($id);
        $staff = Staff::all();
        $guests = Guest::all();
        return view('services.edit')
            ->with('service', $service)
            ->with('staff', $staff)
            ->with('guests', $guests);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $service = RoomService::find($id);
        $input = $request->all();
        $service->update($input);
        return redirect('services')->with('flash_message', 'RoomService Updated!');
    }


    public function destroy(string $id): RedirectResponse
    {
        RoomService::destroy($id);
        return redirect('services')->with('flash_message', 'RoomService deleted!');
    }
}
