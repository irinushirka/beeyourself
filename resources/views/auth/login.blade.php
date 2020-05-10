@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group row">
        <label for="email" >{{ __('E-Mail Address') }}</label>
        <div class="input-place">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <br><span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="password">{{ __('Password') }}</label>
        <div class="input-place">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
            <br><span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label class="form-check-label" for="remember">
        {{ __('Remember Me') }}
        </label>
    </div>                    
    <div class="form-group row mb-0">
        <div class="input-place"><button type="submit">{{ __('Log In') }}</button></div>
        <div class="forget-pass">
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
            @endif
        </div>
    </div>
    </form>
</div>
@endsection
