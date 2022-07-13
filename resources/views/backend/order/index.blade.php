@extends('backend.layouts.backend_dashboard.app')

@section('title')
   <h1 class="mb-1">Order Laundry</h1>
@endsection 

@section('breadcrumbs')
   Order Laundry
@endsection   

@section('content')
  @include('backend.order.content')
@endsection 