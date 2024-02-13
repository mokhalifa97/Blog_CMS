@extends('layout.website')
@section('title','Airspace | Home')

@section('content')

<head>
	<meta charset="UTF-8">
	<title>Aviato E-Commerce Template</title>
	<link rel="stylesheet" href="{{'assets/website/plugins/bootstrap/css/bootstrap.min.css'}}">
	<link rel="stylesheet" href="{{'assets/website/css/style.css'}}">
	<link rel="stylesheet" href="{{'assets/website/css/home.css'}}">
</head>

<section class="hero-area overly">
    <div class="animated-bg"></div>
        <div class="block">
            <h1>Aviato.</h1>
            <p>A Powerful responsive e-commerce template for <br> online store.</p>
            <a href="#" class="btn btn-main mt-30">Purchase Now</a>
    
        </div>
    <div id="mouse-scroll">
        <a data-scroll href="#templates">
            <div class="mouse"  >
                <div class="mouse-in"></div>
            </div>
        </a>
    </div>
</section>

<section class="template-list" id='templates'>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="template-item text-center">
                    <span class="ticker">New</span>
                    <a href="../template/blog.html">
                        <img src="{{'assets/website/images/home/template-previews/blog-dark.png'}}" alt="" class="img-responsive">
                    </a>
                    <h4>Blog Dark</h4>
                    <p>Multipurpose Use (150+ Components)</p>
                </div>
            </div>
            
        </div>
    </div>
</section>



<section class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>More items will be coming Soon.... <br> Not enough ? Make a feature request</h2>
                <a href="https://themefisher.com/contact" class="btn btn-buy-button">Suggestion/ Feature Request</a>
            </div>
        </div>
    </div>
</section>

@endsection