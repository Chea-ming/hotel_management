<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Dashboard;
use Illuminate\View\View;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        
        return view ('dashboard.index');

    }


    public function show()
    {

        return view('dashboard.index2');
        
    }

}
