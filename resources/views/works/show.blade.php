@extends('layouts.app')

@section('content')

@if (session('success'))
    <?= "<script>M.toast({html: '".session('success')."'})</script>" ?>
@endif

<div class="row mt-50">
    <div class="col m12 card">
        <div class="row mt-25">
            <div class="col m2 center-align">
            <a class="btn btn-purple waves-effect waves-purple" href="/works/{{ $work->artist_id }}"><i class="material-icons">arrow_back</i></a>
            </div>
            <div class="col m6 offset-m1 center-align">
                <div class="page-heading">{{ $work->title }}</div>
            </div>
            <div class="col m2 offset-m1 center-align">
                <a class="btn btn-purple waves-effect waves-purple" href="/works/{{ $work->id }}/edit"><i class="material-icons">mode_edit</i></a>
            </div>
        </div>
    </div>
</div>
@endsection