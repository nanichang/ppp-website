@extends('layout.master')

@section('content')
    <section class="hero-section ptb-100 gradient-overlay" style="background: url('assets/img/header-bg-5.jpeg')no-repeat center center / cover">
        <div class="hero-bottom-shape-two" style="background: url('assets/img/hero-bottom-shape.svg')no-repeat bottom center"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">Our Publications</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <!-- <li class="list-inline-item breadcrumb-item"><a href="#">Pages</a></li> -->
                                <li class="list-inline-item breadcrumb-item active">Our Publications</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-section ptb-100">
        <div class="container">
            
            <!--start product carousel-->
            <div class="product-wrap pt-4">
                <div class="product-carousel owl-carousel owl-theme dot-indicator owl-loaded owl-drag">
                    
                
                    
                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-1710px, 0px, 0px); transition: all 0.25s ease 0s; width: 3990px;">
                    <div class="owl-item cloned" style="width: 255px; margin-right: 30px;">
                        <div class="item">
                            <div class="single-product rounded gray-light-bg">
                                <img src="assets/img/product-1.png" class="img-fluid" alt="product">
                                <div class="product-info text-center py-4 px-3">
                                    <h4 class="mb-1">Publication 1</h4>
                                    <h5 class="product-price">
                                <a href="#" class="btn cart-btn">View Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item cloned" style="width: 255px; margin-right: 30px;">
                    <div class="item">
                        <div class="single-product rounded gray-light-bg">
                            <img src="assets/img/product-1.png" class="img-fluid" alt="product">
                            <div class="product-info text-center py-4 px-3">
                                <h4 class="mb-1">Publication</h4>
                                <a href="#" class="btn cart-btn">View Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                </div>
                    <div class="owl-nav disabled">
                        <button type="button" role="presentation" class="owl-prev">
                            <span aria-label="Previous">‹</span>
                        </button>
                        <button type="button" role="presentation" class="owl-next">
                            <span aria-label="Next">›</span>
                        </button>
                    </div>
                    <div class="owl-dots">
                        <button role="button" class="owl-dot active">
                            <span></span>
                        </button>
                        <button role="button" class="owl-dot">
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!--end product carousel-->
        </div>
    </section>
@endsection