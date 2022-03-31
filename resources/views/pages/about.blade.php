@extends('layout.master')

@section('css')
    <style>
        section {
            background-position: 50% 50%;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .profile-card {
            margin-top: 40px;
            margin-botton: 40px;
        }
    </style>
@endsection

@section('content')

    <section data-bs-version="5.1" class="info3 cid-t0VvFBaY4l mbr-parallax-background" id="info3-1k" style="z-index: 0; position: relative; ">
        <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(40, 120, 26);"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="card col-12 col-lg-10">
                    <div class="card-wrapper">
                        <div class="card-box align-center">
                            <h4 class="card-title mbr-fonts-style align-center mb-4 display-1"><strong>What We Do</strong></h4>
                            <p class="mbr-text mbr-fonts-style mb-4 display-7"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="content7 cid-t0Wv2Kg61J" id="content7-1n">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <blockquote class="animate__animated animate__delay-1s animate__fadeInUp">
                        <h5 class="mbr-section-title mbr-fonts-style mb-2 display-7 animate__animated animate__delay-1s animate__fadeInUp"><strong>About Us</strong></h5>
                        <p class="mbr-text mbr-fonts-style display-4 animate__animated animate__delay-1s animate__fadeInUp">
                            Plateau State Infrastructure Promotion and Regulatory Agency (Public Private Partnership) was set up for the development, promotion, and implementation of public-private partnerships in the State. The Agency is responsible for facilitating investment in infrastructure and related development between the state government and private sector.
                            <br>
                            <br>
                            Public Private Partnerships (PPPs) are contracts whereby the private Sector is engaged by the public sector to manage public services or assets and/or to design, build, finance and operate infrastructure to enhance efficiency, broaden access, and improve the quality of public services or assets.
                        </p>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="tabs content18 cid-t0WxAe4XGT" id="tabs1-1p" style="min-height: 600px">
        <div class="container">
            <div class="row justify-content-center mt-4">
                <div class="col-12 col-md-10">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active mbr-fonts-style display-7" data-bs-toggle="tab" href="#home">
                                <strong>Our Vision</strong>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mbr-fonts-style display-7" data-bs-toggle="tab" href="#menu1">
                                <strong>Our Mission</strong>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mbr-fonts-style display-7" data-bs-toggle="tab" href="#menu2">
                                <strong>Our Functions</strong>
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content" style="padding-top:60px;">
                        <div class="tab-pane container active" id="home">
                            <p class="mbr-text mbr-fonts-style display-7">
                                Foremost catalyst for Private Sector Participation in Plateau States Development, resulting in Significant Economic Growth &amp; Prosperity for ALL Residents.
                            </p>
                        </div>
                        <div class="tab-pane container fade" id="menu1">
                            <p class="mbr-text mbr-fonts-style display-7">
                                - To be the most trusted MDA for developing and closing infrastructure investments.
                                <br>- To create the most suitable private investor ready and friendly environment.
                                <br>- To ensure valuable economic and developmental impact in Plateau State.
                                <br>- To be the most reliable investor data resource center.
                            </p>
                        </div>
                        <div class="tab-pane container fade" id="menu2">
                            <p class="mbr-text mbr-fonts-style display-7">
                                - Promote and develop State infrastructure investments.
                                <br>- Ensure efficient execution of partnership Agreements or Contracts by any Government or MDAs with private sector, including support to LGAs.
                                <br>- Set and maintain legal, institutional, standards and regulatory frameworks for new development in infrastructural projects with private sector.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
