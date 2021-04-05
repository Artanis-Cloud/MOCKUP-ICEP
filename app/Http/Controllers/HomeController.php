<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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


    public function add_vanue()
    {
        return view('admin.add-new-vanue');
    }

    public function create_vanue(Request $request)
    {
        dd($request->all());
    }
}
