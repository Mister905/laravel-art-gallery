@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col m12 card auth-card">
        <div class="row">
            <div class="col m12 center-align">
                <div class="page-heading">Register</div>
            </div>
        </div>
        <div class="row mt-50">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input-field col m6 offset-m3">
                    <input id="name" type="text" @error('name') is-invalid @enderror name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <label class="active" for="name">{{ __('Name') }}</label>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
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
                    <input id="password-confirm" type="password" @error('password') is-invalid @enderror name="password_confirmation" required autocomplete="new-password">
                    <label class="active" for="password-confirm">{{ __('Confirm Password') }}</label>
                </div>
                <div class="input-field col m6 offset-m3">
                    <button type="submit" class="btn btn-purple waves-effect waves-purple right">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
