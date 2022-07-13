<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ReportExport;
use App\Models\OrdersLoundryModel;
use App\Repositories\OrdersLoundry;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

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

    public function exportexcel()
    {
        return Excel::download(new ReportExport, 'report.xlsx');
    }
}
