<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Inventory;
use Illuminate\View\View;


class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $inventories = Inventory::all();
       return view ('inventories.index')->with('inventories', $inventories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function create(): View
{
    return view('inventories.create');
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
        Inventory::create($input);
        return redirect('inventories')->with('flash_message', 'item Added!');
    }


    public function show(string $id): View
    {
        $inventory = Inventory::find($id);
        return view('inventories.show')->with('inventories', $inventory);
    }


    public function edit(string $id): View
    {
        $inventory = Inventory::find($id);
        return view('inventories.edit')->with('inventories', $inventory);
    }



    public function update(Request $request, string $id): RedirectResponse
    {
        $inventory = Inventory::find($id);
        $input = $request->all();
        $inventory->update($input);
        return redirect('inventories')->with('flash_message', 'Item Updated!');
    }


    public function destroy(string $id): RedirectResponse
    {
        Inventory::destroy($id);
        return redirect('inventories')->with('flash_message', 'Item deleted!');
    }


}
