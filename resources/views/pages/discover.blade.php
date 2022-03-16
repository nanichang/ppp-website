@extends('layout.master')

@section('content')
    <section class="hero-section ptb-100 gradient-overlay" style="background: url('assets/img/header-bg-5.jpeg')no-repeat center center / cover">
        <div class="hero-bottom-shape-two" style="background: url('assets/img/hero-bottom-shape.svg')no-repeat bottom center"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">Discover Plateau</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="/">Home</a></li>
                                <!-- <li class="list-inline-item breadcrumb-item"><a href="#">Pages</a></li> -->
                                <li class="list-inline-item breadcrumb-item active">Discover Plateau</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="map-update ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Map of Plateau State</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">
                    <div class="map-update-wrap position-relative">
                        <iframe style="width: 100%" height="450" class="rounded shadow" src="https://coronavirus.app/map?embed=true" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                    </div>
                </div>
                <div class="col-12 text-center updated-text">
                    <p>* If you want to see the data you hover on the red circle</p>
                </div>
            </div>
        </div>
    </section>

@endsection