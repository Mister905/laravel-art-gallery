@extends('layouts.app')

@section('content')
<div class="row mt-50">
    <div class="col m12 card">
        <div class="row mt-25">
            <div class="col m2 center-align">
                <a class="btn btn-purple waves-effect waves-purple" href="/artists"><i class="material-icons ">arrow_back</i></a>
            </div>
            <div class="col m6 offset-m1 center-align">
                <div class="page-heading">Update Artist</div>
            </div>
        </div>
        <div class="row">
            <div class="col m12">
                {!! Form::open(['action' => ['ArtistsController@update', $artist->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <div class="row">
                    <div class="col m4 offset-m4">
                        <div class="current-profile-label">Current Profile Image</div>
                        <img class="responsive-img" src="/storage/profile_images/{{ $artist->profile_image }}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col m6 offset-m3">
                        <div class="file-field input-field">
                            <div class="btn btn-purple waves-effect waves-purple">
                                <span><i class="material-icons">add_a_photo</i></span>
                                {{ Form::file('profile_image')}}
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path" type="text">
                            </div>
                        </div>
                    </div>
                </div>    
                <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::text('name', $artist->name, ['class' => ''.($errors->has('name') ? 'invalid':'')]) }}
                            {{ Form::label('name', 'Name', ['class' => 'active']) }} 
                            <?= $errors->has('name') ? '<span class="helper-text" data-error="'.$errors->first('name').'"></span>' : '' ?> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::text('birth_name', $artist->birth_name, ['class' => ''.($errors->has('birth_name') ? 'invalid':'')]) }}
                            {{ Form::label('birth_name', 'Birth Name', ['class' => 'active']) }} 
                            <?= $errors->has('birth_name') ? '<span class="helper-text" data-error="'.$errors->first('birth_name').'"></span>' : '' ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::text('birth_date', $artist->birth_date, ['class' => ''.($errors->has('birth_date') ? 'invalid':'')]) }}
                            {{ Form::label('birth_date', 'Birth Date', ['class' => 'active']) }} 
                            <?= $errors->has('birth_date') ? '<span class="helper-text" data-error="'.$errors->first('birth_date').'"></span>' : '' ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::text('birth_place', $artist->birth_place, ['class' => ''.($errors->has('birth_place') ? 'invalid':'')]) }}
                            {{ Form::label('birth_place', 'Birth Place', ['class' => 'active']) }} 
                            <?= $errors->has('birth_place') ? '<span class="helper-text" data-error="'.$errors->first('birth_place').'"></span>' : '' ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::text('death_date', $artist->death_date, ['class' => ''.($errors->has('death_date') ? 'invalid':'')]) }}
                            {{ Form::label('death_date', 'Death Date', ['class' => 'active']) }} 
                            <?= $errors->has('death_date') ? '<span class="helper-text" data-error="'.$errors->first('death_date').'"></span>' : '' ?>   
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::text('death_place', $artist->death_place, ['class' => ''.($errors->has('death_place') ? 'invalid':'')]) }}
                            {{ Form::label('death_place', 'Death Place', ['class' => 'active']) }} 
                            <?= $errors->has('death_place') ? '<span class="helper-text" data-error="'.$errors->first('death_place').'"></span>' : '' ?>  
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::text('nationality', $artist->nationality, ['class' => ''.($errors->has('nationality') ? 'invalid':'')]) }}
                            {{ Form::label('nationality', 'Nationality', ['class' => 'active']) }} 
                            <?= $errors->has('nationality') ? '<span class="helper-text" data-error="'.$errors->first('nationality').'"></span>' : '' ?>  
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::textarea('biography', $artist->biography, ['id' => 'biography-textarea', 'class' => ''.($errors->has('biography') ? 'materialize-textarea invalid':'materialize-textarea')]) }}
                            {{ Form::label('biography', 'Biography', ['class' => 'active']) }} 
                            <?= $errors->has('biography') ? '<span class="helper-text" data-error="'.$errors->first('biography').'"></span>' : '' ?>  
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