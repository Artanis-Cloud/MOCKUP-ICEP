<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Announcement;


class AnnouncementController extends Controller
{
  public function viewAnnouncementList()
  {

    $data = Announcement::get();


      return view('admin.Announcement.list', compact('data'));
  }


  public function editAnnouncement()
  {

        return redirect()->route('admin.Announcement.list');
  }

  public function  createAnnouncement()
  {

      return view('admin.Announcement.create');
  }

  public function addAnnouncement(Request $request)
  {
      // $data = User::findOrFail($id);
      // $data = $request->all();
      // dd($request->all());

      Announcement::create([
        "user_id" => Auth::user()->id,
        "user_message" => $request->message,

      ]);



      return redirect()->route('admin.Announcement.edit');

    }

    public function deleteAnnouncement(Request $request)
      {
        // dd($request->announcement_id);
        $announcement = Announcement::findOrFail($request->announcement_id);
        // dd($announcement);

        $announcement->delete();

        return redirect()->route('admin.Announcement.list');
      }



}
