<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venues;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.mainMenu');
    }


    public function add_venue()
    {
        return view('admin.add-new-venue');
    }

    public function list_venue()
    {
        $venue = Venues::get();
        return view('admin.list_venue',compact('venue'));
    }


}
