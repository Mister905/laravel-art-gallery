@extends('layouts.app')

@section('content')

@if (session('success'))
    <?= "<script>M.toast({html: '".session('success')."'})</script>" ?>
@endif

<div class="row">
    <div class="col m12 card mt-50">
        <div class="row mt-25">
            <div class="col m2 center-align">
                <a class="btn btn-purple waves-effect waves-purple" href="/artists"><i class="material-icons">arrow_back</i></a>
            </div>
            <div class="col m6 offset-m1 center-align">
                <div class="page-heading">Miscellaneous</div>
            </div>
            <div class="col m2 offset-m1 center-align">
                <a href="/misc/create" class="btn btn-purple">
                    <i class="material-icons dp48">add</i>
                </a>
            </div>
        </div> 
        @if (count($misc) > 0)
        <?php
            for ($i=0; $i < count($misc); $i++) { 
                if ($i % 3 == 0) {
                    echo '<div class="row index-row">';
                }
                echo "<div class='card artist-index-card col m4'>
                        <div class='card-image'>
                            <img class='img-responsive index-image' src='/storage/misc_images/".$misc[$i]->image."'>
                            <a href='/misc/".$misc[$i]->id."'><span class='card-title custom-card-title'>".$misc[$i]->title."</span></a>
                        </div>
                    </div>";

                if ($i % 3 == 2) {
                    echo '</div>';
                }
            }
        ?>
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