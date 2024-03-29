<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\Guest;
use App\Models\Reservation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BillingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $bills = Billing::with('guest')
            ->with('reservation')
            ->paginate(6);
        return view ('bills.index', compact('bills'))
            ->with('i', (request()->input('page', 1) - 1) * 6);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(): View
    {
        $guests = Guest::all();
        $reservations = Reservation::all();
        return view('bills.create')
            ->with('guests', $guests)
            ->with('reservations', $reservations);
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
        Billing::create($input);
        return redirect('bills')->with('flash_message', 'Billing Added!');
    }


    public function show(string $id): View
    {
        $bill = Billing::find($id);
        return view('bills.show')->with('bill', $bill);
    }


    public function edit(string $id): View
    {
        $bill = Billing::find($id);
        $reservations = Reservation::all();
        $guests = Guest::all();
        return view('bills.edit')
            ->with('bill', $bill)
            ->with('guests', $guests)
            ->with('reservations', $reservations);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $bill = Billing::find($id);
        $input = $request->all();
        $bill->update($input);
        return redirect('bills')->with('flash_message', 'Billing Updated!');
    }


    public function destroy(string $id): RedirectResponse
    {
        Billing::destroy($id);
        return redirect('bills')->with('flash_message', 'Billing deleted!');
    }
}
