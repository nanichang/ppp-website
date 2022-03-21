@extends('layout.master')

@section('css') 
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            /* width: 40%; */
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .profile {
            padding: 2px 16px;
        }

        .ptb-100 {
            padding-top:100
        }
        .mtb-100 {
            margin-top: 100px;
            margin-botton: 100px;
        }

        img {
            border-radius: 5px 5px 0 0;
        }

        .profile-card {
            margin-top: 40px;
            margin-botton: 40px;
        }
    </style>
@endsection

@section('content')
    <section class="ptb-100" style="margin-top:100px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8">
                    <div class="section-heading text-center mb-4">
                        <h6 class="card-title mbr-fonts-style display-5">
                            <strong>Meet Our Team Members</strong>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=" container" style="margin-bottom:100px;">
        <div class="row">
            <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
            <div class="row">
                <div class="col-6 col-md-3">
                    <div class="card profile-card">
                        <img src="{{ URL::asset('assets/images/img_avatar.png') }}" alt="Avatar" style="width:100%">
                        <div class="profile text-center">
                            <h4><b>Felix Rwang-Dung</b></h4>
                            <p>Director General</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card profile-card">
                        <img src="{{ URL::asset('assets/images/img_avatar.png') }}" alt="Avatar" style="width:100%">
                        <div class="profile text-center">
                            <h4><b>Rose B. David</b></h4>
                            <p>Director of Finance & Supplies</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card profile-card">
                        <img src="{{ URL::asset('assets/images/img_avatar.png') }}" alt="Avatar" style="width:100%">
                        <div class="profile text-center">
                            <h4><b>Barry Calvin</b></h4>
                            <p>Director of Internal Audit</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card profile-card">
                        <img src="{{ URL::asset('assets/images/img_avatar.png') }}" alt="Avatar" style="width:100%">
                        <div class="profile text-center">
                            <h4><b>Kurnap L. Gambo</b></h4>
                            <p>Acting Director of Administration</p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card profile-card">
                        <img src="{{ URL::asset('assets/images/img_avatar.png') }}" alt="Avatar" style="width:100%">
                        <div class="profile text-center">
                            <h4><b>John Doe</b></h4>
                            <p>Stacy Benedict</p>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card profile-card">
                        <img src="{{ URL::asset('assets/images/img_avatar.png') }}" alt="Avatar" style="width:100%">
                        <div class="profile text-center">
                            <h4><b>Mantim Wuyep</b></h4>
                            <p>Legal Support</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card profile-card">
                        <img src="{{ URL::asset('assets/images/img_avatar.png') }}" alt="Avatar" style="width:100%">
                        <div class="profile text-center">
                            <h4><b>David C. Dung</b></h4>
                            <p>Projects Support</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection