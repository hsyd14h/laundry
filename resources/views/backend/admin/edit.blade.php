@extends('backend.layouts.backend_dashboard.app')

@section('title')  
     <h1>Edit Admin</h1>
@endsection 

@section('breadcrumbs')
    Edit Admin
@endsection  

@section('content')
<div class="container mb-5">
  <div class="row justify-content-center">
    <div class="col-8">
      <div class="card">
         <div class="card-body">
            <form method="POST" action=" /dashboard/admin/update/{{ $data->id }}">
               
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input id="name" name="name" type="text" class="form-control" placeholder="Masukkan Nama..." 
                    value="{{ $data->name }}"/>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" name="email" type="email" class="form-control" placeholder="Masukkan Email...."
                    value="{{ $data->email }}"/>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" name="password" type="text" class="form-control" placeholder="Masukkan Password...."
                    value="{{ $data->password }}"/>
                </div>
                <button type="submit" class="btn btn-primary float-right">Update</button>
                <a href="/dashboard/admin" class="btn btn-secondary">Back</a>
             </form>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection 
