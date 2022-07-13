@extends('backend.layouts.backend_dashboard.app')

@section('title')
   <h1 class="mb-1">Form Data Paket</h1>
@endsection 

@section('breadcrumbs')
   Data Paket
@endsection   

@section('content')
  @include('backend.package.content')
@endsection 

