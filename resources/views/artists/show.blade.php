@extends('layouts.app')

@section('content')
<div class="row mt-50">
    <div class="col m12 card">
        <div class="row mt-25">
            <div class="col m2 center-align">
                <a class="btn btn-purple waves-effect waves-purple" href="/artists"><i class="material-icons">arrow_back</i></a>
            </div>
            <div class="col m6 offset-m1 center-align">
                <div class="page-heading">{{ $artist->name }}</div>
            </div>
            <div class="col m2 offset-m1 center-align">
                <a class="btn btn-purple waves-effect waves-purple" href="/artists/{{ $artist->id }}/edit"><i class="material-icons dp48">mode_edit</i></a>
            </div>
        </div>
        <div class="row mt-25">
            <div class="col m6">IMG</div>
            <div class="col m6">
                <div class="row">
                    <div class="col m8 offset-m2">
                        <div class="display-label bold-text">Name</div>
                        <div class="display-field">{{ $artist->name }}</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col m8 offset-m2">
                        <div class="display-label bold-text">Birth Name</div>
                        <div class="display-field">{{ $artist->birth_name }}</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col m8 offset-m2">
                        <div class="display-label bold-text">Birth Date</div>
                        <div class="display-field">{{ $artist->birth_date }}</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col m8 offset-m2">
                        <div class="display-label bold-text">Birth Place</div>
                        <div class="display-field">{{ $artist->birth_place }}</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col m8 offset-m2">
                        <div class="display-label bold-text">Death Date</div>
                        <div class="display-field">{{ $artist->death_date }}</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col m8 offset-m2">
                        <div class="display-label bold-text">Death Place</div>
                        <div class="display-field">{{ $artist->death_place }}</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col m8 offset-m2">
                        <div class="display-label bold-text">Nationality</div>
                        <div class="display-field">{{ $artist->nationality }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col m10 offset-m1">
                <div class="display-label bold-text">Biography</div>
                <div class="display-field">{{ $artist->biography }}</div>            
            </div>
        </div>
    </div>
</div>
@endsection