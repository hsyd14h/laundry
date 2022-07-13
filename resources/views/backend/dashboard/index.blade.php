@extends('backend.layouts.backend_dashboard.app')

@section('title')  
     <h1>Dashboard</h1>
@endsection 

@section('breadcrumbs')
   Dashboard
@endsection    

@section('content')
     @include('backend.dashboard.home')
@endsection     