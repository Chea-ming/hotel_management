<?php

namespace App\Http\Controllers;

use App\Models\Housekeeping;
use App\Models\Staff;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HousekeepingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $housekeepings = Housekeeping::with('staff')->get();
        return view ('housekeepings.index', compact('housekeepings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(): View
    {
        $staff = Staff::all();
        return view('housekeepings.create')->with('staff', $staff);
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
        Housekeeping::create($input);
        return redirect('housekeepings')->with('flash_message', 'Housekeeping Added!');
    }


    public function show(string $id): View
    {
        $housekeeping = Housekeeping::find($id);
        return view('housekeepings.show')->with('housekeeping', $housekeeping);
    }


    public function edit(string $id): View
    {
        $housekeeping = Housekeeping::find($id);
        $staff = Staff::all();
        return view('housekeepings.edit')
            ->with('housekeeping', $housekeeping)
            ->with('staff', $staff);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $housekeeping = Housekeeping::find($id);
        $input = $request->all();
        $housekeeping->update($input);
        return redirect('housekeepings')->with('flash_message', 'Housekeeping Updated!');
    }


    public function destroy(string $id): RedirectResponse
    {
        Housekeeping::destroy($id);
        return redirect('housekeepings')->with('flash_message', 'Housekeeping deleted!');
    }
}
