@extends('layouts.app')

@section('content')

@if (session('success'))
    <?= "<script>M.toast({html: '".session('success')."'})</script>" ?>
@endif

<div class="row">
    <div class="col m12 card mt-50">
        <div class="row mt-25">
            <div class="col m6 offset-m3 center-align">
                <div class="page-heading">Artists</div>
            </div>
            <div class="col m2 offset-m1 center-align">
                <a href="artists/create" class="btn btn-purple">
                    <i class="material-icons dp48">add</i>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col m2 offset-m5">
                @if (count($artists) > 0)
                    @foreach ($artists as $artist)
                        <div class="card">
                            <div class="card-image">
                                <img class="responsive-img" src="/storage/profile_images/{{ $artist->profile_image }}">
                                <a href="/artists/{{ $artist->id }}"><span class="card-title">{{ $artist->name }}</span></a>
                                
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="page-heading center-align">
                        No artists found...
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection