<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\PackageModel;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $data =PackageModel::where('name','LIKE','%' .$request->search.'%')
            ->orWhere('price', 'LIKE', '%' . $request->search . '%')
            ->orWhere('description', 'LIKE', '%' . $request->search . '%')
            ->paginate(4);
        }else{
            $data =PackageModel::paginate(4);  
        }
        return view('backend.package.index',compact('data'));
    }

    public function create()
    {
        return view('backend.package.create');
    }

    public function postSave(Request $request)
    {
        $data               = new PackageModel();
        $data->name         = $request->name;
        $data->price        = $request->price;
        $data->description  = $request->description;
        $data->created_at   = date("Y-m-d H:i:s");
        $data->updated_at   = date("Y-m-d H:i:s");
        $data ->save();
        //dd($request->all());
        if($data){
            Alert::success('Success', 'Adding Data Sucsess!!');
            return redirect()->route('backend.package.index');
        }else{
            Alert::error('Error', 'Adding Data Failed!!');
            return redirect()->route('backend.package.index');
        }
    }

    public function edit($id)
    {
        $data = PackageModel::find($id);
        // dd($data);
         return view('backend.package.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data                   = PackageModel::find($id);
        $data->name             = $request->name;
        $data->price            = $request->price;
        $data->description      = $request->description;
        $data->updated_at       = date("Y-m-d H:i:s");
        $data->save();
        
        Alert::success('Success', 'Data has been Updated!!');
        return redirect()->route('backend.package.index');
    }

    public function delete($id)
    {
        $data = PackageModel::find($id);
        $data->delete();

        Alert::success('Success', 'Data has been Delete !!');
        return redirect()->route('backend.package.index');
    }

     
    public function detail(Request $request, $id)
    {
        $data = PackageModel::find($id);
        return view('backend.package.post',compact('data'));
    }

}
