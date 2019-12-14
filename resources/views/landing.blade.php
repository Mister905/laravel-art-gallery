@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col m12 card wrapper-card">
        <div class="row">
            <div class="col m6 offset-m3">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col m6 offset-m3">
                <div class="landing-header center-align lading-heading">Art Gallery</div>
            </div>
        </div>
        <div class="row">
            <div class="col m12">
                <iframe width="420" height="315" src="https://laravel.com/img/hero/hero.mp4"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection