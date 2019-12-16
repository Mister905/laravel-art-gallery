@extends('layouts.app')

@section('content')
<div class="row mt-50">
    <div class="col m12 card">
        <div class="row mt-25">
            <div class="col m2 center-align">
                <a class="btn btn-purple btn-back" href="/artists"><i class="material-icons ">arrow_back</i></a>
            </div>
            <div class="col m6 offset-m1 center-align">
                <div class="show-artist-heading">Update Artist</div>
            </div>
        </div>
        <div class="row">
            <div class="col m12">
                {!! Form::open(['action' => ['ArtistsController@update', $artist->id], 'method' => 'POST']) !!}
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::text('name', $artist->name) }}
                            {{ Form::label('name', 'Name', ['class' => 'active']) }}    
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::text('birth_name', $artist->birth_name) }}
                            {{ Form::label('birth_name', 'Birth Name', ['class' => 'active']) }}    
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::text('birth_date', $artist->birth_date) }}
                            {{ Form::label('birth_date', 'Birth Date', ['class' => 'active']) }}    
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::text('birth_place', $artist->birth_place) }}
                            {{ Form::label('birth_place', 'Birth Place', ['class' => 'active']) }}    
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::text('death_date', $artist->death_date) }}
                            {{ Form::label('death_date', 'Death Date', ['class' => 'active']) }}    
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::text('death_place', $artist->death_place) }}
                            {{ Form::label('death_place', 'Death Place', ['class' => 'active']) }}    
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::text('nationality', $artist->nationality) }}
                            {{ Form::label('nationality', 'Nationality', ['class' => 'active']) }}    
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::textarea('biography', $artist->biography, ['class' => 'materialize-textarea']) }}
                            {{ Form::label('biography', 'Biography', ['id' => 'body-textarea', 'class' => 'active']) }}   
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m6 offset-m3">
                            {{ Form::hidden('_method', 'PUT')}}
                            {{ Form::submit('Update', ['class'=>'btn right btn-purple']) }}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection