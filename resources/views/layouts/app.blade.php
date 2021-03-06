<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arimo&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body class="body-bg-color">
    <nav>
        <div class="nav-wrapper custom-nav-wrapper">
            <span class="nav-text">Art Gallery</span>
            <img class="nav-img" src="{{URL::asset('img/palette.png')}}" alt="Painter's Palette">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
            @guest
            <li>
                <a class="sans-serif" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li>
                    <a class="sans-serif" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
            @else
            <li>
                <a class="sans-serif">{{ Auth::user()->name }}</span></a>
            </li>
            <li>
                <a class="sans-serif" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            @endguest
            </ul>
        </div>
    </nav>
    <div class="container">  
        @yield('content')
    </div>
</body>
</html>
