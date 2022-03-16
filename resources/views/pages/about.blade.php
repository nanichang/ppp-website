@extends('layout.master')

@section('content')
    <section class="hero-section ptb-100 gradient-overlay" style="background: url('assets/img/header-bg-5.jpeg')no-repeat center center / cover">
        <div class="hero-bottom-shape-two" style="background: url('assets/img/hero-bottom-shape.svg')no-repeat bottom center"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">About Us</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <!-- <li class="list-inline-item breadcrumb-item"><a href="#">Pages</a></li> -->
                                <li class="list-inline-item breadcrumb-item active">About Us</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us-section ptb-100">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-12 col-lg-6">
                    <div class="about-content-wrap">
                        <h2>Know What We Do</h2>
                        <p>Plateau State Infrastructure Promotion and Regulatory Agency (Public Private Partnership Office) is an agency set up for development, promotion and implementation of public-private partnerships in the State. We are responsible for taking care of various infrastructure development arrangements between the government and private sector to enable both parties to systematically set up objectives to be achieved within the State.</p>

                        <p>The functions of the Agency with respect to Public Private Partnership shall be to:</p>

                        <ul class="check-list-info">
                            <li>Promote and develop State infrastructure through Public Private Partnership.</li>
                            <li>Set and maintain standards regarding infrastructure and new development projects as permissible under this Law.</li>
                            <li>Take custody of every Public Private Partnership Agreement made under this Law and monitor compliance with the terms and conditions of such Agreement.</li>
                            <li>Ensure efficient execution of any public Private Partnership Agreement or Contract entered into by Government, Ministries, Departments and Agencies.</li>
                            <li>Ensure implementation and compliance with the provisions of this Law.</li>
                        </ul>

                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="border-0">
                        <img src="{{ URL::asset('assets/img/LOGO_1.png') }}" alt="video" class="img-fluid">
                        <div class="card-img-overlay text-center">
                            <a href="https://www.youtube.com/watch?v=1APwq1df6Mw" class="popup-youtube video-play-icon color-bip shadow"><span class="ti-control-play"></span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection