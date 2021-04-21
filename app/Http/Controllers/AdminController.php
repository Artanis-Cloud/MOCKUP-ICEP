<?php

namespace App\Http\Controllers;

use App\Models\EventSpace;
use Illuminate\Http\Request;
use App\Models\Venues;
use App\Models\Hotel;
use App\Models\User;
use App\Models\Audit;

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
        return view('admin.main-menu');
    }


    public function add_hotel()
    {
        return view('admin.add-new-hotel');
    }

    public function add_eventspace()
    {
        $hotel_name = Hotel::distinct('hotel_name')->get();
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
        return view('admin.list-venue',compact('hotels','eventspaces'));
    }

    public function user()
    {
        $users = User::get();
        return view('admin.user-list',compact('users'));
    }

    public function add_user()
    {
        return view('admin.add-user');
    }

    public function viewAuditList()
  {
      $data = Audit::get();
      return view('admin.audit-trail.audit-trail-log', compact('data'));
  }

  public function viewAuditListFilter(Request $request)
  {
      $tarikh_mula = date($request->tarikh_mula);
      $tarikh_akhir = date($request->tarikh_akhir);

      // $data = Audit::whereBetween('created_at', [$tarikh_mula.' 00:00:00',$tarikh_akhir.' 23:59:59'])
      //             ->where('event', 'Log Masuk')
      //             ->orWhere('event', 'Log Keluar')
      //             ->orderBy('created_at', 'desc')
      //             ->get();


      $data = Audit:: where('updated_at', '>', $tarikh_mula.' 00:00:00')
                  ->where('updated_at', '<', $tarikh_akhir.' 23:59:59')
                  ->orderBy('updated_at', 'asc')
                  ->get();

      return view('admin.audit-trail.audit-trail-log-filter', compact('data'));
  }


}
