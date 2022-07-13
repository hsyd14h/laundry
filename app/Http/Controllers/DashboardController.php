<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
       $data['data']         = Db::table('orders_loundry')->orderBy('id', 'desc')->limit(4)->get();
       $data['jumlah_paket'] = Db::table('package')->count();
       $data['jumlah_order'] = Db::table('orders_loundry')->count();
       $data['jumlah_user']  = Db::table('users')->count();
       return view ('backend.dashboard.index', $data); 
    }
}
