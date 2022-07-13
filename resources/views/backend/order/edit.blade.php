@extends('backend.layouts.backend_dashboard.app')

@section('title')  
     <h1>Edit Order</h1>
@endsection 

@section('breadcrumbs')
    Edit Order
@endsection    

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card">
         <div class="card-body">
            <form method="POST" action="/dashboard/order/update/{{ $data->id }}">
              @csrf
              <div class="mb-3">
                <label for="input_orders_laundry_code_order" class="form-label">Code Order</label>
                <input id="input_orders_laundry_code_order" name="code_order" type="text" class="form-control"
                value="{{ $data->code_order }}" />
             </div>
             <div class="form-group">
              <label for="inputPackage">Paket</label>
              <select id="inputPackage" class="form-control custom-select">
                <option selected disabled>--Select one--</option>
                <option>Express</option>
                <option>Dry Cleaning</option>
                <option>Premium</option>
              </select>
            </div>
              <div class="mb-3">
                <label for="user_name" class="form-label">Nama</label>
                <input id="user_name" name="name" type="text" class="form-control" placeholder="Masukkan Nama..."
                value="{{ $data->user_name }}" />
            </div>
              <div class="mb-3">
                <label for="input_orders_laundry_user_phone" class="form-label">No Handphone</label>
                <input id="input_orders_laundry_user_phone" name="user_phone" type="text" class="form-control" placeholder="Masukkan Nomor..."
                value="{{ $data->user_phone }}" />
            </div>
              <div class="mb-3">
                <label for="input_orders_laundry_address" class="form-label">Alamat</label>
                <input id="input_orders_laundry_address" name="address" type="text" class="form-control" placeholder="Masukkan Alamat..."
                value="{{ $data->address }}" />
            </div>
              <div class="mb-3">
                <label for="input_orders_laundry_total_price" class="form-label">Total Harga</label>
                <input id="input_orders_laundry_total_price" name="total_price" type="text" class="form-control"
                value="{{ $data->total_price }}" />
            </div>
            <div class="form-group">
                <label for="inputStatus">Status</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option selected disabled>--Select one--</option>
                  <option>Dalam Proses</option>
                  <option>Proses</option>
                  <option>Selesai</option>
                </select>
              </div>
               <button type="submit" class="btn btn-primary float-right">Update</button>
               <a href="/dashboard/order" class="btn btn-secondary">Back</a>
             </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection 