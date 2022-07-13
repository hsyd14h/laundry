@extends('backend.layouts.backend_dashboard.app')

@section('title')
   <h1 class="mb-1">Form Laporan</h1>
@endsection 

@section('breadcrumbs')
   Laporan
@endsection   

@section('content')
  @include('backend.report.content')
@endsection 

