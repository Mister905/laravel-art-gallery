@extends('layouts.app')

@section('content')
<div class="row mt-50">
    <div class="col m12 card">
        <div class="row mt-25">
            <div class="col m2 center-align">
                <a class="btn btn-purple waves-effect waves-purple" href="/misc"><i class="material-icons ">arrow_back</i></a>
            </div>
            <div class="col m6 offset-m1 center-align">
                <div class="page-heading">Create New Misc. Record</div>
            </div>
        </div>
        <div class="row">
            <div class="col m12">
                {!! Form::open(['action' => 'MiscController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                    <div class="row">
                        <div class="input-field col m6 offset-m3">        
                        <?= !$errors->has('image') ? (
                            "<div class='file-field input-field'>
                                <div class='btn btn-purple waves-effect waves-purple'>
                                    <span><i class='material-icons'>add_a_photo</i></span>
                                    ".Form::file('image')."
                                </div>
                                <div class='file-path-wrapper'>
                                    <input class='file-path' type='text'>
                                </div>
                            </div>"
                        ) : (
                            "<div class='file-field input-field'>
                                <div class='btn btn-purple waves-effect waves-purple'>
                                    <span><i class='material-icons'>add_a_photo</i></span>
                                    ".Form::file('image')."
                                </div>
                                <div class='file-path-wrapper'>
                                    <input class='file-path invalid' type='text'>
                                    <span class='helper-text file-validation-message'>".$errors->first('image')."</span>
                                </div>
                            </div>"
                        ) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::text('title', null, ['class' => ''.($errors->has('title') ? 'invalid':'')]) }}
                            {{ Form::label('title', 'Title', array('class' => 'active')) }} 
                            <?= $errors->has('title') ? '<span class="helper-text" data-error="'.$errors->first('title').'"></span>' : '' ?> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::text('artist', null, ['class' => ''.($errors->has('artist') ? 'invalid':'')]) }}
                            {{ Form::label('artist', 'Artist', ['class' => 'active']) }} 
                            <?= $errors->has('artist') ? '<span class="helper-text" data-error="'.$errors->first('artist').'"></span>' : '' ?> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::text('year', null, ['class' => ''.($errors->has('year') ? 'invalid':'')]) }}
                            {{ Form::label('year', 'Year', ['class' => 'active']) }} 
                            <?= $errors->has('year') ? '<span class="helper-text" data-error="'.$errors->first('year').'"></span>' : '' ?> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::text('location', null, ['class' => ''.($errors->has('location') ? 'invalid':'')]) }}
                            {{ Form::label('location', 'Location', ['class' => 'active']) }} 
                            <?= $errors->has('location') ? '<span class="helper-text" data-error="'.$errors->first('location').'"></span>' : '' ?>   
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m6 offset-m3">
                            {{ Form::button('Create', ['type'=>'submit', 'class'=>'btn btn-purple waves-effect waves-purple right']) }}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection