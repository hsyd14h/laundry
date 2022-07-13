<?php

namespace App\Http\Controllers;

use App\Models\PackageModel;
use Illuminate\Http\Request;
use App\Models\OrdersLoundryModel;
use Illuminate\Support\Facades\DB;

class OrdernowController extends Controller
{
    public function index()
    {
        $code            = DB::table('orders_loundry')->orderBy('id', 'desc')->pluck('id')->first();
        $kodeorder       = $code+1;
        $codes           = 'LD0'.$kodeorder;
        $data['row']     = $codes;

        $data['package'] = DB::table('package')->get();
        return view('frontend.pages.index', $data);
    }

    public function postSave(Request $request)
    {
        $data                     = new OrdersLoundryModel();
        $data->code_order         = $request->code_order;
        $data->package_id         = $request->package_id;
        $data->total_price        = $request->total_price;
        $data->user_name          = $request->user_name;
        $data->user_id            = $request->user_id;
        $data->user_phone         = $request->user_phone;
        $data->address            = $request->address;
        $data->date_drop_laundry  = $request->date_drop_laundry;
        $data->date_take_laundry  = $request->date_take_laundry;
        $data->date_finish_laundry= $request->date_finish_laundry;
        $data->status             = "Dalam Proses";
        $data->created_at         = date("Y-m-d H:i:s");
        $data->updated_at         = date("Y-m-d H:i:s");
        $data->save();

        return redirect()->route('frontend.pages.orderpdf');

    }


    public function tampil()
    {
        $lastId = DB::table('orders_loundry')->orderBy('id','desc')->pluck('id')->first();
        $data['data'] = DB::table('orders_loundry')
        ->join('package','package.id','=','orders_loundry.package_id')
        ->select('orders_loundry.*','package.name','package.price')->where('orders_loundry.id', $lastId)->first();

        return view('frontend.pages.orderpdf', $data);
    }

    // public function printnota()
    // {
    //     $lastId = DB::table('orders_laundry')->orderBy('id','desc')->pluck('id')->first();
    //     $data['data'] = DB::table('orders_laundry')
    //     ->join('package','package.id','=','orders_laundry.package_id')
    //     ->select('orders_laundry.*','package.type','package.name','package.price')->where('orders_laundry.id', $lastId)->first();
    //     return view('frontend.printnota', $data);
    // }


    public function cari(Request $request)
    {
        $package_id = $request->package_id;
        if ($package_id=='') {
            $data['val']    = 2;
        }else{
            $isi = PackageModel::where('id','=', $package_id)->first();
            if (empty($isi)) {
                $data['val']    = 0;
            }else{
                $data['val']    = 1;
                $data['data']    = $isi;
            }
        }
        return response($data);
    }

}
