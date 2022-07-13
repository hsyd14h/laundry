<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ReportExport;
use App\Models\OrdersLoundryModel;
use App\Repositories\OrdersLoundry;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class ReportController extends Controller
{
    
    public function index(Request $request)
    {
        $data['data'] = Db::table('orders_loundry')->orderBy('id', 'desc')->get();
        return view ('backend.report.index', $data); 
    }

    public function detail(Request $request, $id)
    {
        $data = OrdersLoundryModel::find($id);
        return view('backend.report.post',compact('data'));
    }

    public function edit($id)
    {
        $data = OrdersLoundryModel::find($id);
        return view('backend.report.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data                      = OrdersLoundryModel::find($id);
        $data->code_order          = $request->code_order;
        $data->package_id          = $request->package_id;
        $data->total_price         = $request->total_price;
        $data->user_name           = $request->user_name;
        $data->user_id             = $request->user_id;
        $data->user_phone          = $request->user_phone;
        $data->address             = $request->address;
        $data->date_drop_laundry   = $request->date_drop_laundry;
        $data->date_take_laundry   = $request->date_take_laundry;
        $data->date_finish_laundry = $request->date_finish_laundry;
        $data->updated_at          = date("Y-m-d H:i:s");
        $data->save();
        
        Alert::success('Success', 'Data has been Updated!!');
        return redirect()->route('backend.report.index');
    }

    public function delete($id)
    {
        $data = OrdersLoundryModel::find($id);
        $data->delete();

        Alert::success('Success', 'Data has been Delete !!');
        return redirect()->route('backend.report.index');
    }

    public function exportexcel()
    {
        return Excel::download(new ReportExport, 'report.xlsx');
    }
}
