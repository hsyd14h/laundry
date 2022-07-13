@extends('layouts.auth')

@section('title')
 <img src="{{ asset('assets/img/washing-machine.png') }}" alt="Laundry Logo"  height="70" > <b>Register Laundry</b>
@endsection

@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-group">
       <label class="small mb-1" for="name">Nama</label>
       <input name="name" value="{{ old('name') }}" class="form-control py-4 @error('name') is-invalid @enderror" id="name" type="text" placeholder="Enter name" autocomplete="name"  autofocus/>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>
    <div class="form-group">
       <label class="small mb-1" for="email">Email</label>
       <input name="email" value="{{ old('email') }}" class="form-control py-4 @error('email') is-invalid @enderror" id="email" type="email" placeholder="Enter email address" autocomplete="email"/>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>
    <div class="form-group">
       <label class="small mb-1" for="password">Password</label>
       <input name="password" class="form-control py-4 @error('password') is-invalid @enderror" id="password" type="password" placeholder="Enter password" autocomplete="new-password" />
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>
    <div class="form-group">
       <label class="small mb-1" for="password-confirm">Confirm Password</label>
       <input name="password_confirmation" class="form-control py-4 @error('password') is-invalid @enderror" id="password-confirm" type="password" placeholder="Enter password" autocomplete="new-password" />
    </div>
    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
       <button class="btn btn-primary px-4" type="submit">Register</button>
    </div>
 </form>
@endsection