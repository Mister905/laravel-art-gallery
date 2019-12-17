@extends('layouts.app')

@section('content')
<div class="row mt-50">
    <div class="col m12 card">
        <div class="row mt-25">
            <div class="col m2 center-align">
                <a class="btn btn-purple waves-effect waves-purple" href="/artists"><i class="material-icons ">arrow_back</i></a>
            </div>
            <div class="col m6 offset-m1 center-align">
                <div class="page-heading">Create Artist</div>
            </div>
        </div>
        <div class="row">
            <div class="col m12">
                {!! Form::open(['action' => 'ArtistsController@store', 'method' => 'POST']) !!}
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::text('name', null, ['class' => ''.($errors->has('name') ? 'invalid':'')]) }}
                            {{ Form::label('name', 'Name', ['class' => 'active']) }} 
                            <?= $errors->has('name') ? '<span class="helper-text" data-error="'.$errors->first('name').'"></span>' : '' ?> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::text('birth_name', null, ['class' => ''.($errors->has('birth_name') ? 'invalid':'')]) }}
                            {{ Form::label('birth_name', 'Birth Name', ['class' => 'active']) }} 
                            <?= $errors->has('birth_name') ? '<span class="helper-text" data-error="'.$errors->first('birth_name').'"></span>' : '' ?> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::text('birth_date', null, ['class' => ''.($errors->has('birth_date') ? 'invalid':'')]) }}
                            {{ Form::label('birth_date', 'Birth Date', ['class' => 'active']) }} 
                            <?= $errors->has('birth_date') ? '<span class="helper-text" data-error="'.$errors->first('birth_date').'"></span>' : '' ?> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::text('birth_place', null, ['class' => ''.($errors->has('birth_place') ? 'invalid':'')]) }}
                            {{ Form::label('birth_place', 'Birth Place', ['class' => 'active']) }} 
                            <?= $errors->has('birth_place') ? '<span class="helper-text" data-error="'.$errors->first('birth_place').'"></span>' : '' ?>   
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::text('death_date', null, ['class' => ''.($errors->has('death_date') ? 'invalid':'')]) }}
                            {{ Form::label('death_date', 'Death Date', ['class' => 'active']) }} 
                            <?= $errors->has('death_date') ? '<span class="helper-text" data-error="'.$errors->first('death_date').'"></span>' : '' ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::text('death_place', null, ['class' => ''.($errors->has('death_place') ? 'invalid':'')]) }}
                            {{ Form::label('death_place', 'Death Place', ['class' => 'active']) }} 
                            <?= $errors->has('death_place') ? '<span class="helper-text" data-error="'.$errors->first('death_place').'"></span>' : '' ?>   
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::text('nationality', null, ['class' => ''.($errors->has('nationality') ? 'invalid':'')]) }}
                            {{ Form::label('nationality', 'Nationality', ['class' => 'active']) }} 
                            <?= $errors->has('nationality') ? '<span class="helper-text" data-error="'.$errors->first('nationality').'"></span>' : '' ?>   
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col m6 offset-m3">
                            {{ Form::textarea('biography', null, ['class' => ''.($errors->has('biography') ? 'invalid materialize-textarea':'materialize-textarea')]) }}
                            {{ Form::label('biography', 'Biography', ['class' => 'active']) }} 
                            <?= $errors->has('biography') ? '<span class="helper-text" data-error="'.$errors->first('biography').'"></span>' : '' ?> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col m6 offset-m3">
                            {{ Form::submit('Create', ['class'=>'btn btn-purple waves-effect waves-purple right']) }}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection