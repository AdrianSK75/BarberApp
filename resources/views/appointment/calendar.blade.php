@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <h1>Aici </h1>
                </div>
                <div class="carousel-item">
                    <h1> va fi </h1>
                </div>
                <div class="carousel-item">
                    <h1> un calendar </h1>
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
    </div>
</div>

@endsection
