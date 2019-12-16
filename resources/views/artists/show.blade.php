@extends('layouts.app')

@section('content')
<div class="row mt-50">
    <div class="col m12 card">
        <div class="row mt-25">
            <div class="col m2 center-align">
                <a class="btn btn-purple" href="/artists"><i class="material-icons dp48">arrow_back</i></a>
            </div>
            <div class="col m6 offset-m1 center-align">
                <div class="show-artist-heading">{{ $artist->name }}</div>
            </div>
            <div class="col m2 offset-m1 center-align">
                <a class="btn btn-purple" href="/artists/{{ $artist->id }}/edit"><i class="material-icons dp48">mode_edit</i></a>
            </div>
        </div>
        <div class="row">
            <div class="col m12">
                {{ $artist->biography }}
            </div>
        </div>
    </div>
</div>
@endsection