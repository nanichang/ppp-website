@extends('layout.master')

@section('content')
    <section class="hero-section ptb-100 gradient-overlay" style="background: url('assets/img/header-bg-5.jpeg')no-repeat top center / cover">
        <div class="hero-bottom-shape-two" style="background: url('assets/img/hero-bottom-shape.svg')no-repeat bottom center"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">Meet Our Team Members</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                                <!-- <li class="list-inline-item breadcrumb-item"><a href="#">Pages</a></li> -->
                                <li class="list-inline-item breadcrumb-item active">Our Board Members</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-two-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8">
                    <div class="section-heading text-center mb-4">
                        <h2>Meet Our Team Members</h2>
                        <p class="lead">Distinctively grow go forward manufactured products and optimal networks. Enthusiastically
                            disseminate user-centric outsourcing through.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0">
                        <div class="card gray-light-bg text-center border-0">
                            <img src="{{ URL::asset('assets/img/team-1.jpeg') }}" alt="team image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Richard Ford</h5>
                                <span>Director General</span>
                               
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Energistically administrate multifunctional rather than front-end expertise." </p><a href="#" class="teacher-name">
                                <h5 class="mb-0 teacher text-white">Richard Ford</h5></a>
                                <span class="teacher-field text-white">Director General</span>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0">
                        <div class="card gray-light-bg text-center border-0">
                            <img src="assets/img/team-1.jpeg" alt="team image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="h5 teacher mb-0">Ann Smith</h5>
                                <span>Finance Lead</span>
                                
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Efficiently deliver business systems through extensible redefine user" </p><a href="#" class="teacher-name">
                                <h5 class="mb-0 teacher text-white">Ann Smith</h5></a><span class="teacher-field text-white">Finance Lead</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0">
                        <div class="card gray-light-bg text-center border-0">
                            <img src="assets/img/team-1.jpeg" alt="team image" class="img-fluid">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Philip Wilson</h5>
                                <span>Marketing Head</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote">"Monotonectally mesh customized core competencies through communities." </p><a href="#" class="teacher-name">
                                <h5 class="mb-0 teacher text-white">Philip Wilson</h5></a>
                                <span class="teacher-field text-white">Marketing Head</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection