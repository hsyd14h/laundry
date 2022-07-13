<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $data = UsersModel::where('name', 'LIKE', '%' . $request->search . '%')
            ->orWhere('email', 'LIKE', '%' . $request->search . '%')
            ->paginate(4);
        } else {
            $data = UsersModel::paginate(4);
        }
        return view('backend.users.index', compact('data'));
    }

    public function create()
    {
        return view('backend.users.create');
    }

    public function postSave(Request $request)
    {
        $data               = new UsersModel();
        $data->name         = $request->name;
        $data->email        = $request->email;
        $data->password     = Hash::make($request->password);
        $data->isAdmin      = "0";
        $data->created_at   = date("Y-m-d H:i:s");
        $data->updated_at   = date("Y-m-d H:i:s");
        $data->save();
        //dd($request->all());
        if ($data) {
            Alert::success('Success', 'Adding Data Sucsess!!');
            return redirect()->route('backend.users.index');
        } else {
            Alert::error('Error', 'Adding Data Failed!!');
            return redirect()->route('backend.users.index');
        }
    }


    public function edit($id)
    {
        $data = UsersModel::find($id);
        return view('backend.users.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data                   = UsersModel::find($id);
        $data->name             = $request->name;
        $data->email            = $request->email;
        $data->password         = Hash::make($request->password);
        $data->updated_at       = date("Y-m-d H:i:s");
        $data->save();

        Alert::success('Success', 'Data has been Updated!!');
        return redirect()->route('backend.users.index');
    }

    public function delete($id)
    {
        $data = UsersModel::find($id);
        $data->delete();

        Alert::success('Success', 'Data has been Delete !!');
        return redirect()->route('backend.users.index');
    }

    public function detail(Request $request, $id)
    {
        $data = UsersModel::find($id);
        return view('backend.users.post', compact('data'));
    }
}
