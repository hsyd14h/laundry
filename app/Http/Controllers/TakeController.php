<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TakeController extends Controller
{
    public function index()
    {
         return view('frontend.pages.take');
         
        //  Alert::success('Success', 'Data has been Updated!!');
        //  return redirect()->route('frontend.pages.laundry');   
    }

    public function laundry()
    {
        return view('frontend.pages.laundry');
    }
}
