@extends('layout.website')
@section('title', '404')
@section('content')
<section class="page-404">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('index')}}">
                    <img src="{{'assets/website/images/logo.png'}}" alt="site logo" />
                </a>
                <h1>404</h1>
                <h2>Page Not Found</h2>
                <a href="{{route('index')}}" class="btn btn-main"><i class="tf-ion-android-arrow-back"></i> Go Home</a>
                
            </div>
        </div>
    </div>
</section>

@endsection
