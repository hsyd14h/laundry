@extends('backend.layouts.backend_dashboard.app')

@section('title')  
     <h1>Edit User</h1>
@endsection 

@section('breadcrumbs')
    Edit
@endsection  

@section('content')
<div class="container mb-5">
  <div class="row justify-content-center">
    <div class="col-8">
      <div class="card">
         <div class="card-body">
            <form method="POST" action="/dashboard/user/update/{{ $data->id }}">
                @csrf
                <div class="mb-3">
                    <label for="input_users_name" class="form-label">Nama</label>
                    <input id="input_users_name" name="name" type="text" class="form-control" placeholder="Masukkan Nama..." 
                    value="{{ $data->name }}"/>
                </div>
                <div class="mb-3">
                    <label for="input_users_email" class="form-label">Email</label>
                    <input id="input_users_email" name="email" type="email" class="form-control" placeholder="Masukkan Email...."
                    value="{{ $data->email }}"/>
                </div>
                <div class="mb-3">
                    <label for="input_users_password" class="form-label">Password</label>
                    <input id="input_users_password" name="password" type="text" class="form-control" placeholder="Masukkan Password...."
                    value="{{ $data->password }}"/>
                </div>
                <button type="submit" class="btn btn-primary float-right">Update</button>
                <a href="/dashboard/user" class="btn btn-secondary">Back</a>
             </form>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection 
