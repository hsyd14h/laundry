@extends('backend.layouts.backend_dashboard.app')

@section('title')
   <h1 class="mb-1">Detail Order Laudry</h1>
@endsection 

@section('breadcrumbs')
   Detail Order Laundry
@endsection   

@section('content')
<a href="/dashboard/order" class="btn btn-secondary float-right">Back</a>
    <div class="row justify-content-center">
      <div class="card">
         <div class="card-body">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Order:</strong>
                    {{ $data->code_order }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tgl.Order:</strong>
                    {{ $data->date_drop_laundry }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Paket:</strong>
                    {{ $data->package_id }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    {{ $data->user_name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No.Telp:</strong>
                    {{ $data->user_phone }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    {{ $data->address }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Total Harga:</strong>
                    {{ $data->total_price }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status Laundry:</strong>
                    {{ $data->status }}
                </div>
            </div>
         </div>
      </div>
    </div>
@endsection 

