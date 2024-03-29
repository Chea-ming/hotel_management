<?php

namespace App\Http\Controllers;

use App\Models\CheckInCheckOut;
use App\Models\Guest;
use App\Models\Staff;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CheckInCheckOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $checks = CheckInCheckOut::with('guest')
            ->with('staff')
            ->paginate(6);
        return view ('checks.index', compact('checks'))
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
        return view('checks.create')
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
        CheckInCheckOut::create($input);
        return redirect('checks')->with('flash_message', 'CheckInCheckOut Added!');
    }


    public function show(string $id): View
    {
        $check = CheckInCheckOut::find($id);
        return view('checks.show')->with('check', $check);
    }


    public function edit(string $id): View
    {
        $check = CheckInCheckOut::find($id);
        $staff = Staff::all();
        $guests = Guest::all();
        return view('checks.edit')
            ->with('check', $check)
            ->with('staff', $staff)
            ->with('guests', $guests);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $check = CheckInCheckOut::find($id);
        $input = $request->all();
        $check->update($input);
        return redirect('checks')->with('flash_message', 'CheckInCheckOut Updated!');
    }


    public function destroy(string $id): RedirectResponse
    {
        CheckInCheckOut::destroy($id);
        return redirect('checks')->with('flash_message', 'CheckInCheckOut deleted!');
    }
}
