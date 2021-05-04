<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\EventSpace;
use App\Models\Hotel;
use App\Models\User;
use Auth;
use App\Models\Announcement;

class UserController extends Controller
{
    public function index()
    {
        $announcement =Announcement::get();
        return view('homepage',compact('announcement'));
    }
}
