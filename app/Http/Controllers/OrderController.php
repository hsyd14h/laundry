<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrdersLoundryModel;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $data = OrdersLoundryModel::where('user_name', 'LIKE', '%' . $request->search . '%')
            ->orWhere('code_order', 'LIKE', '%' . $request->search . '%')
            ->orWhere('date_drop_laundry', 'LIKE', '%' . $request->search . '%')
            ->orWhere('total_price', 'LIKE', '%' . $request->search . '%')
            ->orWhere('package_id', 'LIKE', '%' . $request->search . '%')
            ->orWhere('status', 'LIKE', '%' . $request->search . '%')
            ->paginate(4);
        } else {
            $data = OrdersLoundryModel::paginate(4);
        }
        return view('backend.order.index', compact('data'));

    }

    public function create()
    {
        return view('backend.order.create');
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
        $data->created_at         = date("Y-m-d H:i:s");
        $data->updated_at         = date("Y-m-d H:i:s");
        $data->save();
        // dd($request->all());
        if ($data) {
            Alert::success('Success', 'Adding Data Sucsess!!');
            return redirect()->route('backend.order.index');
        } else {
            Alert::error('Error', 'Adding Data Failed!!');
            return redirect()->route('backend.order.index');
        }
    }

    public function edit($id)
    {
        $data = OrdersLoundryModel::find($id);
        return view('backend.order.edit', compact('data'));
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
        return redirect()->route('backend.order.index');
    }

    public function delete($id)
    {
        $data = OrdersLoundryModel::find($id);
        $data->delete();

        Alert::success('Success', 'Data has been Delete !!');
        return redirect()->route('backend.order.index');
    }
}
