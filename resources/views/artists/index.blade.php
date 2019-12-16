@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col m12 card mt-50">
        <div class="row mt-25">
            <div class="col m6 offset-m3 center-align">
                <div class="">Artists</div>
            </div>
            <div class="col m2 offset-m1 center-align">
                <a href="artists/create" class="btn btn-purple">
                    <i class="material-icons dp48">add</i>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col m12">
                @if (count($artists) > 0)
                    @foreach ($artists as $artist)
                        <div class="row">
                            <div class="col m6 offset-m3 card">
                                <div class="artist-index-heading">
                                <a href="/artists/{{ $artist->id }}">{{ $artist->name }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="artist-index-heading">
                        No artists found...
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection