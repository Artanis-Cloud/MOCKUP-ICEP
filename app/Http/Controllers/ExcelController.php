<?php

namespace App\Http\Controllers;
use App\Exports\HotelRoomExport;
use App\Imports\HotelRoomImport;
use App\Exports\HotelExport;
use App\Imports\HotelImport;
use App\Exports\EventSpaceExport;
use App\Imports\EventSpaceImport;

use Illuminate\Http\Request;

class ExcelController extends Controller
{
    public function importExportView()
    {
       return view('excel.index');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function HotelRoomexportExcel($type)     //hotelroom export

    {
        // dd();
        return \Excel::download(new HotelRoomExport, 'Room_List.'.$type); //downloaded file name
    }

    public function HotelexportExcel($type)         //hotel export

    {
        // dd();
        return \Excel::download(new HotelExport, 'Hotel_List.'.$type);
    }

    public function EventSpaceexportExcel($type)         //eventspace export

    {
        // dd();
        return \Excel::download(new EventSpaceExport, 'EventSpace_List.'.$type);
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function HotelRoomimportExcel(Request $request) //hotelROom import
    {
        \Excel::import(new HotelRoomImport,$request->import_file);

        \Session::put('success', 'Your file is imported successfully in database.');

        return back();
    }

    public function HotelimportExcel(Request $request)      //hotel import
    {
        \Excel::import(new HotelImport,$request->import_file);

        \Session::put('success', 'Your file is imported successfully in database.');

        return back();
    }

    public function EventSpaceimportExcel(Request $request)      //eventspace import
    {
        \Excel::import(new EventSpaceImport,$request->import_file);

        \Session::put('success', 'Your file is imported successfully in database.');

        return back();
    }


}
