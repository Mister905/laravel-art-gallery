@extends('layouts.app')

@section('content')

@if (session('success'))
    <?= "<script>M.toast({html: '".session('success')."'})</script>" ?>
@endif

<div class="row">
    <div class="col m12 card mt-50">
        <div class="row mt-25">
            <div class="col m6 offset-m3 center-align">
                <div class="page-heading">{{ $data['artist']->name."'s Works" }}</div>
            </div>
            <div class="col m2 offset-m1 center-align">
                <a href="/works/create/{{ $data['artist']->id }}" class="btn btn-purple">
                    <i class="material-icons dp48">add</i>
                </a>
            </div>
        </div> 
        @if (count($data['works']) > 0)
            <h1>DERP</h1>
        @else
        <div class="row">
            <div class="col m12">
                <div class="page-heading center-align">
                    No works found...
                </div>
            </div>
        </div>
        @endif
       
    </div>
</div>
@endsection