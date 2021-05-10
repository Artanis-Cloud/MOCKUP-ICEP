<?php

namespace App\Http\Controllers;

use App\Models\EventSpace;
use Illuminate\Http\Request;
use App\Models\Venues;
use App\Models\Hotel;
use App\Models\User;
use App\Models\Audit;
use App\Models\Announcement;
// use Storage;
use Auth;
use Illuminate\Support\Facades\Hash;

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
        $announcement =Announcement::get();
        return view('admin.main-menu',compact('announcement'));
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
        // dd($hotels->hotel_name);
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


        public function update_profile(Request $request){
            // dd($request->all());
            $users = User::findOrFail(Auth::user()->id);


            $users->name = $request->name;

            $users->email = $request->email;


            if(!(Hash::check($request->get('password'), Auth::user()->password))){
                return redirect()->back()->with("error","Kata laluan semasa tidak betul");
              }

            if(strcmp($request->get('password'),$request->get('new_password'))== 0){
                return redirect()->back()->with("error","Kata laluan semasa tidak boleh sama dengan kata laluan baru");
              }

            if(strcmp($request->get('new_password'),$request->get('password_confirmation'))== 1){
                return redirect()->back()->with("error","Kata laluan baru tidak sama dengan kata laluan pengesahan");
              }

              $validatedData = $request->validate([
                      'password' => 'required',
                      'new_password' => 'required|string|min:6',
                ]);

                $hashed_random_password = Hash::make($request->get('new_password'));

                $users->password = $hashed_random_password;

                // $gambar_profile = "";

                if ($files = request()->file('gambar_profile') != null) {
                    // dd($request->gambar_profile);
                    $profile_picture = request()->file('gambar_profile')->store('public/storage/profile');
                    $users->profile_picture = $profile_picture;
    }


            $users->save();

            return redirect()->back()->with("success", "Your profile has been updated");
        }

        public function update_profile_admin()
        {

            $users = auth()->user();

            return view('admin.update-profile', compact('users'));
        }

  public function addUser(Request $request)
  {
    $hashed_random_password = Hash::make("1234567890");

    User::create([
        "name" => $request->name,
        "email" => $request->email,
        "password" =>$hashed_random_password,
        "roles" => $request ->roles,
    ]);

    $users = User::get();
    return view('admin.user-list',compact('users'))->with("success", "Your profile has been updated");
  }


}
