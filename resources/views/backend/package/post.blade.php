@extends('backend.layouts.backend_dashboard.app')

@section('title')
   <h1 class="mb-1">Detail Paket Laundry</h1>
@endsection 

@section('breadcrumbs')
   Detail Paket
@endsection   

@section('content')
<a href="/dashboard/package" class="btn btn-secondary float-right">Back</a>
    <div class="row justify-content-center">
      <div class="card">
         <div class="card-body">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    {{ $data->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga Paket:</strong>
                    {{ $data->price }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Keterangan:</strong>
                    {{ $data->description }}
                </div>
            </div>
         </div>
      </div>
    </div>
@endsection 

