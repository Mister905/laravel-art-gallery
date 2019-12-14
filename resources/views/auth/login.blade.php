@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col m12 card auth-card">
        <div class="row">
            <div class="col m12 center-align">
                <div class="auth-heading">Login</div>
            </div>
        </div>
        <div class="row mt-50">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-field col m6 offset-m3">
                    <input id="email" type="text" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email">
                    <label class="active" for="email">{{ __('E-Mail Address') }}</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-field col m6 offset-m3">
                    <input id="password" type="password" @error('password') is-invalid @enderror name="password" required autocomplete="new-password">
                    <label class="active" for="password">{{ __('Password') }}</label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-field col m6 offset-m3">
                    <button type="submit" class="btn purple darken-2 waves-effect waves-purple right">
                        {{ __('Login') }}
                    </button>
                </div>
                {{-- <div class="input-field col m6 offset-m3">
                    @if (Route::has('password.request'))
                        <a class="btn" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div> --}}
            </form>
        </div>
    </div>
</div>
@endsection
