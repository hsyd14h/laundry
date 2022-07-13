@extends('backend.layouts.backend_dashboard.app')

@section('title')
   <h1 class="mb-1">Data Admin</h1>
@endsection 

@section('breadcrumbs')
  Admin
@endsection   

@section('content')
  @include('backend.admin.content')
@endsection 