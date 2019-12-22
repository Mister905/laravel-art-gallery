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
        <div class="row">
            <div class="col m6 offset-m3 center-align">
                <script>
                    // Material Box
                    document.addEventListener('DOMContentLoaded', function() {
                        var elems = document.querySelectorAll('.materialboxed');
                        var instances = M.Materialbox.init(elems, null);
                    }); 
                </script>
                <img class="responsive-img materialboxed" src="/storage/work_images/{{ $work->image }}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col m6 offset-m3 center-align">
                <div class="show-artist-label">{{ $work->artist }}</div>
                <div class="show-artist-year">{{ $work->year }}</div>
                <div class="show-artist-location">{{ $work->location }}</div>
            </div>
            <div class="col m2 offset-m1 center-align">
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                    var elems = document.querySelectorAll('.modal');
                    var instances = M.Modal.init(elems, null);
                  });
                </script>
                
                <!-- Modal Trigger -->
                <a class="btn btn-purple waves-effect waves-purple modal-trigger" href="#bio_modal"><i class="material-icons">delete</i></a>

                <!-- Modal Structure -->
                <div id="bio_modal" class="modal">
                    <div class="modal-content">
                        <div class="row">
                            <div class="col m12">
                                <div class="modal-heading">Confirmation</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col m12">
                                <div class="modal-prompt">Are you sure you want to delete this record?</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer custom-modal-footer">
                        <a href="#!" class="modal-close btn btn-purple waves-effect waves-purple sans-serif">Cancel</a>
                        {!!Form::open(['action' => ['WorksController@destroy', $work->id], 'method' => 'POST', 'class' => 'delete-model-form'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-purple waves-effect waves-purple  sans-serif btn-modal-confirm'])}}
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection