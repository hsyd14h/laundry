@extends('backend.layouts.backend_dashboard.app')

@section('title')  
     <h1>Add Admin</h1>
@endsection 

@section('breadcrumbs')
    Add Admin
@endsection    

@section('content')
<div class="container mb-5">
  <div class="row justify-content-center">
    <div class="col-8">
      <div class="card">
         <div class="card-body">
            <form method="POST" action="{{ url('/dashboard/admin/insertdata') }}" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input id="name" name="name" type="text" class="form-control" placeholder="Masukkan Nama..." />
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" name="email" type="email" class="form-control" placeholder="Masukkan Email...."/>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="password" name="password" type="text" class="form-control" placeholder="Masukkan Password...."/>
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">Masukkan Foto</label>
              <input type="file" name="image" class="form-control"/>
           </div> 
            <button type="submit" class="btn btn-primary float-right">Create</button>
               <a href="/dashboard/admin" class="btn btn-secondary">Back</a>
             </form>
         </div>
        </div>
    </div>
   </div>
 </div>

@endsection 