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
        @if (count($artists) > 0)
            <?php
                for ($i=0; $i < count($artists); $i++) { 
                    if ($i % 4 == 0) {
                        echo '<div class="row index-row">';
                    }
                    echo "<div class='card col m3'>
                            <div class='card-image'>
                                <img class='img-responsive index-image' src='/storage/profile_images/".$artists[$i]->profile_image."'>
                                <a href='/artists/".$artists[$i]->id."'><span class='card-title custom-card-title'>".$artists[$i]->name."</span></a>
                            </div>
                        </div>";

                    if ($i % 4 == 3) {
                        echo '</div>';
                    }
                }
            ?>
        @else
        <div class="row">
            <div class="col m12">
                <div class="page-heading center-align">
                    No artists found...
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection