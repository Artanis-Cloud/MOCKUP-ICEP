<?php

namespace App\Http\Controllers;

use App\Models\EventSpace;
use Illuminate\Http\Request;
use App\Models\Venues;
use App\Models\Hotel;

class AdminController extends Controller
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


    public function add_hotel()
    {
        return view('admin.add-new-hotel');
    }

    public function add_eventspace()
    {
        $hotel_name = Hotel::get();
        return view('admin.add-new-eventspace',compact('hotel_name'));
    }

    public function forms()
    {
        return view('admin.forms');
    }

    public function list_venue()
    {
        $hotels = Hotel::get();
        $eventspaces = EventSpace::get();
        return view('admin.list_venue',compact('hotels','eventspaces'));
    }


}
