@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h5> Salutare {{ auth()->user()->lastname }} ! </h5>
                <div class="card">

                    @include("inc.mini-navbar");
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

