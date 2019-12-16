<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-size: 1rem;
            color: #333;
            overflow-x: hidden;
        }

        .landing-container {
            max-width: 960px;
            padding-left: 1rem;
            padding-right: 1rem;
            margin: auto;
            text-align: center;
            height: 100vh;
            display: flex;
            align-items: center;
            color: #FFF;
        }

        .landing-video-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }

        .landing-video-wrapper video {
            min-width: 100%;
            min-height: 100%;
        }

        .landing-overlay {
            height: 100vh;
            width: 100vw;
            position: absolute;
            top: 0;
            left: 0;
            background: rgb(120, 105, 186, 0.85);
            z-index: 1;
        }

        .landing-content {
            z-index: 2;
        }

        .landing-palette {
            margin-top: 3px;
            margin-left: 5px;
            vertical-align: middle;
            margin-bottom: 30px;
        }

        .landing-heading {
            color: #fff;
            font-size: 4rem;
            margin-left: 8px;
            display: inline;
        }

        .landing-text {
            font-size: 2rem;
        }

        .landing-login {
            display: inline;
        }

        .landing-register {
            display: inline;
        }

        .btn-landing {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;
            color: #FFF !important;
            font-weight: bold;
            text-transform: uppercase;
            text-decoration: none;
            background: #3e2b96;
            padding: 20px;
            border: 4px solid #FFF !important;
            display: inline-block;
            transition: all 0.4s ease 0s;
        }

        .btn-landing-login {
            padding: 15px 30px;
        }

        .btn-landing-register {
            padding: 15px 20px;
        }

        .btn-landing:hover {
            color: #3e2b96 !important;
            background: #FFF;
            border: 4px solid #1a0b5e !important;
            transition: all 0.4s ease 0s;
        }

        .landing-login {
            margin-right: 50px;
        }
    </style>
</head>
<body>
    <div id="app">
        <div class="landing-container">
            <div class="landing-video-wrapper">
                <video src="{{ asset('img/painting.mp4') }}" autoplay="true" loop="true"></video>
            </div>
            <div class="landing-overlay"></div>
            <div class="landing-content">
                <div>
                    <span class="landing-heading">Art Gallery</span>
                    <img class="landing-palette" src="{{URL::asset('img/palette_landing.png')}}" 
                </div>
                <p class="landing-text">This is not a series about things that hang on walls, it is not about decor or prettiness. It is a series about the force, the need, the passion of art<br>...the power of art</p>
                <div class="landing-login">
                    <a href="{{ route('login') }}" class="btn-landing btn-landing-login">Login</a>
                </div>
                <div class="landing-register">
                    <a href="{{ route('register') }}" class="btn-landing btn-landing-register">Register</a>
                </div>    
            </div>
        </div>
    </div>
</body>
</html>
