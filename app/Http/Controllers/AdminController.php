<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use Illuminate\Http\Request;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        
        if ($request->has('search')) {
            $data = AdminModel::where('name', 'LIKE', '%' . $request->search . '%')
            ->orWhere('email', 'LIKE', '%' . $request->search . '%')
            ->paginate(4);
        } else {
            $data = AdminModel::paginate(4);
        }
        return view('backend.admin.index', compact('data'));
        // $data = AdminModel::paginate(4);
        // return view('backend.admin.index', compact('data'));
    }

    public function create()
    {
        return view('backend.admin.create');
    }

    public function postSave(Request $request)
    {
        
        $data               = new AdminModel();
        $data->name         = $request->name;
        $data->email        = $request->email;
        $data->image        = $request->image;
        $data->password     = Hash::make($request->password);
        $data->image        = null;
        $data->created_at   = date("Y-m-d H:i:s");
        $data->updated_at   = date("Y-m-d H:i:s");
        $data->save();
        // dd($request->all());
        if($request->hasFile('image')){
            $request->file('image')->move('image/', $request->file('image')->getClientOriginalName());
            $data->image = $request->file('image')->getClientOriginalName();
            $data->save();
        }
        if ($data) {
            Alert::success('Success', 'Adding Data Sucsess!!');
            return redirect()->route('backend.admin.index');
        } else {
            Alert::error('Error', 'Adding Data Failed!!');
            return redirect()->route('backend.admin.index');
        }
     }
     
     public function edit($id)
    {
        $data = AdminModel::find($id);
        return view('backend.admin.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data                   = AdminModel::find($id);
        $data->name             = $request->name;
        $data->email            = $request->email;
        $data->image            = $request->image;
        $data->password         = Hash::make($request->password);
        $data->updated_at       = date("Y-m-d H:i:s");
        $data->save();

        Alert::success('Success', 'Data has been Updated!!');
        return redirect()->route('backend.admin.index');
    }

    public function delete($id)
    {
        $data = AdminModel::find($id);
        $data->delete();

        Alert::success('Success', 'Data has been Delete !!');
        return redirect()->route('backend.admin.index');
    }

    public function detail(Request $request, $id)
    {
        $data = AdminModel::find($id);
        return view('backend.admin.post', compact('data'));
    }

}
