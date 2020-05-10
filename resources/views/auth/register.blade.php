@extends('layouts.app')

@section('content')
<div class="container">
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-group row">
        <label for="name">Name</label>
        <div class="input-place">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
            <br><span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="email">Email</label>
        <div class="input-place">
            <input id="email" type="email" class="form-control @error('name') is-invalid @enderror" name="email" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
            <br><span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="password">Password</label>
        <div class="input-place">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                <br><strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="password-confirm">Confirm password</label>
        <div class="input-place">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>        
    </div>
    <div class="form-group row">
        <div class="input-place">
            <button type="submit" class="btn btn-primary">Sign In</button>
        </div>    
    </div>
</form>
</div>
@endsection
