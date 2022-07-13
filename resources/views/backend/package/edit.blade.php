@extends('backend.layouts.backend_dashboard.app')

@section('title')  
     <h1>Edit Package</h1>
@endsection 

@section('breadcrumbs')
    Edit
@endsection    

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card">
         <div class="card-body">
            <form method="POST" action="/dashboard/package/update/{{ $data->id }}">
              @csrf
              <div class="mb-3">
                <label for="input_package_name" class="form-label">Nama Paket</label>
                <input id="input_package_name" name="name" type="text" class="form-control" placeholder="Masukkan Harga Paket..." 
                value="{{ $data->name }}" />
            </div>
              <div class="mb-3">
              <div class="mb-3">
                <label for="input_package_price" class="form-label">Harga Paket</label>
                <input id="input_package_price" name="price" type="text" class="form-control" placeholder="Masukkan Harga Paket..."
                value="{{ $data->price }}"/>
            </div>
              <div class="mb-3">
                <label for="input_package_description" class="form-label">Keterangan</label>
                {{-- <input id="input_package_description" name="description" type="text" class="form-control" value="{{ $data->description }}"/> --}}
                <textarea type="text" name="description"id="input_package_description" class="form-control" rows="4">{{ old('description', $data->description) }}</textarea>
            </div>
               <button type="submit" class="btn btn-primary float-right">Update</button>
               <a href="/dashboard/package" class="btn btn-secondary">Back</a>
             </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection 