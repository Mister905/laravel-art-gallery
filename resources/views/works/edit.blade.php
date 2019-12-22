@extends('layouts.app')

@section('content')
<div class="row mt-50">
    <div class="col m12 card">
        <div class="row mt-25">
            <div class="col m2 center-align">
            <a class="btn btn-purple waves-effect waves-purple" href="/works/{{ $work->id }}/show"><i class="material-icons ">arrow_back</i></a>
            </div>
            <div class="col m6 offset-m1 center-align">
                <div class="page-heading">Update Work</div>
            </div>
        </div>
        <div class="row">
            <div class="col m12">
                {!! Form::open(['action' => ['WorksController@update', $work->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="row">
                    <div class="col m6 offset-m3 center-align">
                        <div class="current-profile-label left">Current Work Image</div>
                        <img class="responsive-img" src="/storage/work_images/{{ $work->image }}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m6 offset-m3">
                        <div class="file-field input-field">
                            <div class="btn btn-purple waves-effect waves-purple">
                                <span><i class="material-icons">add_a_photo</i></span>
                                {{ Form::file('image')}}
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path" type="text">
                            </div>
                        </div>
                    </div>
                </div>    
                <div class="row">
                    <div class="input-field col m6 offset-m3">
                        {{ Form::text('title', $work->title, ['class' => ''.($errors->has('title') ? 'invalid':'')]) }}
                        {{ Form::label('title', 'Title', ['class' => 'active']) }} 
                        <?= $errors->has('title') ? '<span class="helper-text" data-error="'.$errors->first('title').'"></span>' : '' ?> 
                    </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::text('artist', $work->artist, ['class' => ''.($errors->has('artist') ? 'invalid':'')]) }}
                            {{ Form::label('artist', 'Artist', ['class' => 'active']) }} 
                            <?= $errors->has('artist') ? '<span class="helper-text" data-error="'.$errors->first('artist').'"></span>' : '' ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::text('year', $work->year, ['class' => ''.($errors->has('year') ? 'invalid':'')]) }}
                            {{ Form::label('year', 'Year', ['class' => 'active']) }} 
                            <?= $errors->has('year') ? '<span class="helper-text" data-error="'.$errors->first('year').'"></span>' : '' ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::text('location', $work->location, ['class' => ''.($errors->has('location') ? 'invalid':'')]) }}
                            {{ Form::label('location', 'Location', ['class' => 'active']) }} 
                            <?= $errors->has('location') ? '<span class="helper-text" data-error="'.$errors->first('location').'"></span>' : '' ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m6 offset-m3">
                            {{ Form::hidden('_method', 'PUT')}}
                            {{ Form::button('Update', ['type'=>'submit', 'class'=>'btn btn-purple waves-effect waves-purple right']) }}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection