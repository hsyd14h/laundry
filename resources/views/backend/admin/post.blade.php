@extends('backend.layouts.backend_dashboard.app')

@section('title')
   <h1 class="mb-1">Detail Admin</h1>
@endsection 

@section('breadcrumbs')
   Detail Admin
@endsection   

@section('content')
<a href="/dashboard/admin" class="btn btn-secondary float-right">Back</a>
    <div class="row justify-content-center mt-5">
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
                   <strong>Email User:</strong>
                   {{ $data->email }}
               </div>
           </div>
           </div>
         </div>
      </div>
    </div>
@endsection 