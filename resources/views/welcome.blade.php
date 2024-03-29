@extends('layout.master')

@section('css')
    <style>
        .carousel-caption {
            text-align: left;
        }
    </style>
@endsection

@section('content')

    <section data-bs-version="5.1" class="header19 carousel slide" id="header19-15" data-bs-ride="carousel">
        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(40, 120, 26); min-height:725px;">
        </div>
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ URL::asset('assets/images/2.jpeg') }}" alt="Los Angeles" class="d-block w-100 uk-animation-kenburns">
                    <div class="carousel-caption">
                        <h1 class="mbr-section-title mbr-white mbr-fonts-style mb-3 display-1">
                            <strong><br></strong>
                            <strong>Plateau State Infrastructure Promotion and Regulatory Agency</strong>
                        </h1>
                        <p class="mbr-text mbr-white mbr-fonts-style display-7">
                            (PUBLIC PRIVATE PARTNERSHIP OFFICE)
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ URL::asset('assets/images/b1.jpeg') }}" alt="Chicago" class="d-block w-100 uk-animation-kenburns">
                    <div class="carousel-caption">
                        <h1 class="mbr-section-title mbr-white mbr-fonts-style mb-3 display-1">
                            <strong><br></strong>
                            <strong>Sustainable Economic Rebirth</strong>
                        </h1>

                        <div class="row pt-5 justify-content-center">
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card-wrapper">
                                    <div class="card-box align-center sector">
                                        <span class="mbr-iconfont mobi-mbri-shopping-basket mobi-mbri" style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span>
                                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7">
                                            <strong>Agriculture</strong>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card-wrapper">
                                    <div class="card-box align-center sector">
                                        <span class="mbr-iconfont mobi-mbri-cloud mobi-mbri" style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span>
                                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7">
                                            Natural Minerals
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card-wrapper sector">
                                    <div class="card-box align-center">
                                        <span class="mbr-iconfont mobi-mbri-cash mobi-mbri" style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span>
                                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7">
                                            <strong>Trade &amp; Commerce</strong>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card-wrapper sector">
                                    <div class="card-box align-center">
                                        <span class="mbr-iconfont mobi-mbri-map-pin mobi-mbri" style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span>
                                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7"><strong>Tourism &amp; Hospitality</strong></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ URL::asset('assets/images/b2.jpeg') }}" alt="New York" class="d-block w-100 uk-animation-kenburns">
                    <div class="carousel-caption">
                        <h1 class="mbr-section-title mbr-white mbr-fonts-style mb-3 display-1">
                            <strong><br></strong>
                            <strong>Physical Infrastructure Development</strong>
                        </h1>

                        <div class="row pt-5 justify-content-center">
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card-wrapper">
                                    <div class="card-box align-center sector">
                                        <span class="mbr-iconfont mobi-mbri-delivery mobi-mbri" style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span>
                                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7">
                                            <strong>Transportation</strong>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card-wrapper">
                                    <div class="card-box align-center sector">
                                        <span class="mbr-iconfont mobi-mbri-extension mobi-mbri" style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span>
                                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7">
                                            Industrial Processing Zone
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card-wrapper sector">
                                    <div class="card-box align-center">
                                        <span class="mbr-iconfont mobi-mbri-wifi mobi-mbri" style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span>
                                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7">
                                            <strong>Broadband &amp; Power</strong>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card-wrapper sector">
                                    <div class="card-box align-center">
                                        <span class="mbr-iconfont mobi-mbri-home mobi-mbri" style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span>
                                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7"><strong>Real Estate Development</strong></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ URL::asset('assets/images/b3.jpeg') }}" alt="New York" class="d-block w-100 uk-animation-kenburns">
                    <div class="carousel-caption">
                        <h1 class="mbr-section-title mbr-white mbr-fonts-style mb-3 display-1">
                            <strong><br></strong>
                            <strong>Peace, Security, & Good Governance</strong>
                        </h1>

                        <div class="row pt-5 justify-content-center">
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card-wrapper">
                                    <div class="card-box align-center sector">
                                        <span class="mbr-iconfont mobi-mbri-smile-face mobi-mbri" style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span>
                                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7">
                                            <strong>Entertainment &amp; Sports</strong>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card-wrapper">
                                    <div class="card-box align-center sector">
                                        <span class="mbr-iconfont mobi-mbri-hearth mobi-mbri" style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span>
                                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7">
                                            Healthcare
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card-wrapper sector">
                                    <div class="card-box align-center">
                                        <span class="mbr-iconfont mobi-mbri-protect mobi-mbri" style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span>
                                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7">
                                            <strong>Security</strong>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card-wrapper sector">
                                    <div class="card-box align-center">
                                        <span class="mbr-iconfont mobi-mbri-briefcase mobi-mbri" style="color: rgb(255, 255, 255); fill: rgb(255, 255, 255);"></span>
                                        <h4 class="card-title align-center mbr-black mbr-fonts-style display-7"><strong>Education</strong></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        
    </section>

    <section data-bs-version="5.1" class="features16 cid-sZHT4QbGvM" id="features17-p" uk-scrollspy="cls: uk-animation-fade uk-animation-slide-bottom; repeat: true">
        <div class="container">
            <div class="content-wrapper">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-4">
                        <div class="image-wrapper">
                            <img src="assets/images/gov-752x1050.png" alt="Mobirise Website Builder">
                        </div>
                    </div>
                    <div class="col-12 col-lg">
                        <div class="text-wrapper">
                            <h6 class="card-title mbr-fonts-style display-5">
                                <strong>Plateau PPP</strong></h6>
                            <p class="mbr-text mbr-fonts-style mb-4 display-4">
                                Plateau State Infrastructure Promotion and Regulatory Agency (Public Private Partnership) was set up for the development, promotion, and implementation of public-private partnerships in the State. The Agency is responsible for facilitating investment in infrastructure and related development between the state government and private sector.
                            </p>
                            <p>
                                The functions of the Agency with respect to Public Private Partnership shall be to:
                            </p>
                            <ul class="check-list-info">
                                <li>Promote and develop State infrastructure through Public Private Partnership..</li>
                                <li>Set and maintain standards regarding infrastructure and new development projects as permissible under this Law.</li>
                                <li>Take custody of every Public Private Partnership Agreement made under this Law and monitor compliance with the terms and </li>
                                <li>Conditions of such Agreement.</li>
                                <li>Ensure efficient execution of any public Private Partnership Agreement or Contract entered into by Government, Ministries, Departments and Agencies.</li>
                                <li>Ensure implementation and compliance with the provisions of this Law.</li>
                            </ul>
                            <div class="mbr-section-btn mt-3">
                                <a class="btn btn-primary display-4" href="{{ route('pages.about') }}">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

    <section data-bs-version="5.1" class="features1 cid-sZLI6Fmvd7 mbr-parallax-background" id="features1-1a" uk-scrollspy="cls: uk-animation-fade uk-animation-slide-bottom; repeat: true">
        <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(40, 120, 26);">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>KEY SECTORS</strong></h3>
                    <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-7">
                        In line with the Governors' vision and the SDGs', the PPP has 3 major sectors that house
                        <div>12 major areas for state development and economic rebirth.</div>
                        <br>
                        <div>&nbsp;</div>
                    </h5>
                </div>
            </div>
            <div class="row">
                
                <div class="card col-12 justify-content-center">
                    <!-- <img src="{{ URL::asset('assets/images/focal_sectors.svg') }}" alt=""> -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8794 7836">
    
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: #194382;
                                }

                                .cls-1, .cls-10, .cls-11, .cls-12, .cls-13, .cls-14, .cls-15, .cls-16, .cls-17, .cls-2, .cls-3, .cls-4, .cls-5, .cls-6, .cls-7, .cls-8, .cls-9 {
                                    fill-rule: evenodd;
                                }

                                .cls-2 {
                                    fill: #086b45;
                                }

                                .cls-3 {
                                    fill: #198d63;
                                }

                                .cls-4 {
                                    fill: #a92803;
                                }

                                .cls-5 {
                                    fill: #e63503;
                                }

                                .cls-6 {
                                    fill: #F8F8FF;
                                    stroke: #af2e09;
                                }

                                .cls-6:hover {
                                    fill: #af2e09;
                                    stroke: #F8F8FF;
                                    stroke-width: 5px;
                                }

                                .cls-7 {
                                    fill: #F8F8FF;
                                    stroke: #ff8a00;
                                }

                                .cls-7:hover {
                                    fill: #ff8a00;
                                    stroke: #F8F8FF;
                                    stroke-width: 5px;
                                }

                                .cls-8 {
                                    fill: #F8F8FF;
                                    stroke: #ffdb96;
                                }

                                .cls-8:hover {
                                    fill: #ffdb96;
                                    stroke: #F8F8FF;
                                    stroke-width: 5px;
                                }

                                .cls-9 {
                                    fill: #F8F8FF;
                                    stroke: #ffe400
                                }

                                .cls-9:hover {
                                    fill: #ffe400;
                                    stroke: #F8F8FF;
                                    stroke-width: 5px;
                                }

                                .cls-10 {
                                    fill: #F8F8FF;
                                }

                                .cls-10:hover {
                                    fill: #186582;
                                    stroke: #F8F8FF;
                                    stroke-width: 5px;
                                }

                                .cls-11 {
                                    stroke: #0b2453;
                                    fill: #F8F8FF;
                                }

                                .cls-11:hover {
                                    fill: #0b2453;
                                    stroke: #F8F8FF;
                                    stroke-width: 5px;
                                }

                                .cls-12 {
                                    stroke: #127ea2;
                                    fill: #F8F8FF;
                                }

                                .cls-12:hover {
                                    fill: #127ea2;
                                    stroke: #F8F8FF;
                                    stroke-width: 5px;
                                }

                                .cls-13 {
                                    fill: #F8F8FF;
                                    stroke: #194387
                                }

                                .cls-13:hover {
                                    fill: #194387;
                                    stroke: #F8F8FF;
                                    stroke-width: 5px;
                                }

                                .cls-14 {
                                    fill: #F8F8FF;
                                    stroke: 09532e
                                }

                                .cls-14:hover {
                                    fill: #09532e;
                                    stroke: #F8F8FF;
                                    stroke-width: 5px;
                                }

                                .cls-15 {
                                    fill: #F8F8FF;
                                    stroke: #41b186;
                                }

                                .cls-15:hover {
                                    fill: #41b186;
                                    stroke: #F8F8FF;
                                    stroke-width: 5px;
                                }

                                .cls-16 {
                                    fill: #F8F8FF;
                                    stroke: #00a79d
                                }

                                .cls-16:hover {
                                    fill: #00a79d;
                                    stroke: #F8F8FF;
                                    stroke-width: 5px;
                                }

                                .cls-17 {
                                    fill: #F8F8FF;
                                    stroke: #81ad13;
                                }
                                .cls-17:hover {
                                    fill: #81ad13;
                                    stroke: #F8F8FF;
                                    stroke-width: 5px;
                                }
                            </style>
                        </defs>
                        <path id="infra" class="cls-1" d="M4389,4040q595.935,229.47,1192,459c-0.33,1.33-.67,2.67-1,4q-236.475,144.48-473,289-66.99,42-134,84H3805q-169.98-105.495-340-211l-195-119c-13.56-8.5-66.96-34.24-72-46q438.45-168.99,877-338,111.495-42.99,223-86C4313.88,4069.68,4382.03,4048.86,4389,4040Zm-225,481c-0.74,51.83,75.11,57.66,91,18,24.67-61.58-54.54-46.16-67-71-1.35-4.82-.23-8.57,1-13,13.48-10.92,40.9-11.91,42,12h23v-1c-2.62-10.51-3.5-19.66-9-27-18.85-25.12-66.65-15.97-77,10-21.38,53.63,41.02,52.28,65,68,1.7,6.35,1.62,10.47,0,17-16.13,12.87-43.8,12.48-47-13h-22Zm509-49c-0.51-73.2-113.91-56.29-99,33,4.14,24.81,10.18,46.27,29,56,35.9,18.56,67.44-11.89,70-44h-23c-8.56,43.86-45.03,25.97-52-12-9.3-50.62,45.21-79.42,52-33h23Zm-963-44v134h23V4428h-23Zm41,0v134h21q0.495-46.5,1-93c0.33,0.67.67,1.33,1,2q22.995,45.495,46,91h22V4428h-21q-0.495,45.495-1,91c-0.67-.33-1.33-0.67-2-1q-22.005-45-44-90h-23Zm109,0v134h23q0.495-28.5,1-57h49v-22q-25.005-.495-50-1v-31h57v-23h-80Zm92,0v134h23v-53c13.26-.61,32.08-2.2,37,6,6.23,9.25,4.25,34.53,6,47h26v-3c-13.03-21.06,1.73-39.46-18-61,9.63-9.42,19.45-19.41,15-40C4033.12,4421.52,3995.87,4426.9,3952,4428Zm141,0q-20.505,66.99-41,134h25q4.005-13.995,8-28,21,0.495,42,1,3.495,13.5,7,27h25q-19.995-66.99-40-134h-26Zm167,0v23q17.505,0.495,35,1v110h23V4451h34v-23h-92Zm102,0v134h22q0.495-26.505,1-53,16.995,1.005,34,2c7.84,11.64,4.31,35.58,9,51h26v-4c-9.97-7.41-2.45-34.28-7-47q-6-7.005-12-14c18.62-6.21,21.31-39.65,10-56C4432.75,4423.29,4392.13,4427.15,4362,4428Zm108,0c-1,57.85-15.57,150.63,55,137,47.93-9.26,36.9-80.69,36-137h-24c0.73,23.23,5.07,92.73-4,106-6.36,9.3-28.13,11.4-34,0-10.12-11.84-5.23-82.47-5-106h-24Zm209,0v23q16.995,0.495,34,1v110h23q0.495-55.5,1-111h34v-23h-92Zm100,0c-1.01,58.18-15.02,150.93,56,137,47.16-9.25,35.89-81.49,35-137h-24c0.45,34,6.78,90.23-8,111-49.85,15.26-35.89-68.15-35-111h-24Zm110,0v134h23v-53c13.26-.61,32.08-2.2,37,6,6.23,9.25,4.25,34.53,6,47h26v-3c-13.03-21.06,1.73-39.46-18-61,9.63-9.42,19.45-19.41,15-40C4970.12,4421.52,4932.87,4426.9,4889,4428Zm109,0v134h86v-24h-63v-35h55v-23h-55v-29h60v-23h-83Zm-1023,23c13.81-.59,34.93-2.74,40,6,7.42,7.99,2.76,21.45-2,28-9.75,2.66-25.22,2.12-38,2v-36Zm409,0c16.19-.67,36.77-2.93,42,8,3.51,5.89,1.73,16.87,0,23-9.15,6.07-26.06,5.3-42,5v-36Zm528,0c13.81-.59,34.93-2.74,40,6,7.42,7.99,2.76,21.45-2,28-9.75,2.66-25.22,2.12-38,2v-36Zm-807,9c3.01,2.66,15.11,51.84,15,52h-27l-2-2Q4098.005,4485,4105,4460Z"/>
                        
                        <path id="wealth_3d" class="cls-2" d="M4390,3861q429.45,158.49,859,317l333,112c0.39,62.41,1.95,132.37,2,198-1.33-.67-2.67-1.33-4-2v14q-598.44-230.475-1197-461Q4386.5,3950.005,4390,3861Z"/>

                        <path id="wealth_" class="cls-3" d="M4394,2912h579q68.49,42.99,137,86,154.98,95.49,310,191,80.49,49.5,161,99,63.99,168.48,128,337,51.99,134.985,104,270Q5788,3958.5,5763,4022q-60,158.49-120,317c-14.41,36.31-26.56,73.74-42,111-6.14,14.82-15.79,31.45-17,51-1.67-.33-3.33-0.67-5-1-0.02-18.13-1.49-40.8,4-53V4296q-119.49-42.99-239-86c-13.09-4.92-27.99-5.14-43-11l-542-200q-184.98-68.49-370-137Q4391.505,3387.04,4394,2912Zm232,450q16.005,66.99,32,134,11.505-.495,23-1,8.505-48.99,17-98h1q8.505,49.5,17,99,11.505-.495,23-1,15.495-66.495,31-133h-24l-18,96h-1q-8.505-48-17-96-12.495.495-25,1-7.5,47.49-15,95h-1l-18-96h-25Zm154,0v134h86v-24h-62v-34q27.495-.495,55-1-0.495-11.505-1-23h-54v-28q30-.495,60-1-0.495-11.505-1-23h-83Zm132,0q-19.995,66.99-40,134h25q3.495-13.5,7-27,21-.495,42-1v2q3.495,13.005,7,26h26v-1q-19.995-66.495-40-133h-27Zm77,0v134h80v-24h-57V3362h-23Zm70,0v24h34v110h24V3386h34v-24h-92Zm101,0v134h23q0.495-30,1-60,21.99,0.495,44,1v59h23V3362h-23v51h-45v-51h-23Zm-235,32q7.005,25.995,14,52h-28v-3Q4918.005,3418.505,4925,3394Zm300,128c-25.9,10.4-39.36,17.95-46,47-10.39,45.48,9.35,103.83,59,95C5304.74,3652.13,5306.71,3520.24,5225,3522Zm-495,92h-23c-9.31,43.8-45.25,26.51-52-10-9.11-49.27,41.21-81.73,52-33h23c0.11-29.92-29.52-59.24-65-45-23.51,9.43-40.79,43.45-34,82C4643.82,3680.81,4726.72,3682.1,4730,3614Zm15-88v134h23v-52c12.31-.21,26.62-0.37,36,2,5.7,11.39,5.52,34.63,7,50h27c-3.17-11.35-2.57-30.5-6-46-2.01-9.09-11.78-15.31-11-20,17.96-7.28,18.02-41.22,7-56C4815.55,3521.31,4774.22,3525.18,4745,3526Zm109,0v134h86v-24h-62v-34q27.495-.495,55-1-0.495-11.505-1-23h-54v-28q30-.495,60-1-0.495-11.505-1-23h-83Zm132,0q-19.995,66.99-40,134h25q3.495-13.5,7-27,21-.495,42-1v2q3.495,13.005,7,26h26v-1q-19.995-66.495-40-133h-27Zm56,0v24h34v110h24V3550h34v-24h-92Zm99,0v134h23V3526h-23Zm158,0v134h22q0.495-46.995,1-94v2q22.5,45.99,45,92h24V3526h-22q-0.495,45.99-1,92v-2q-22.005-45-44-90h-25Zm-74,20c49.22-1.81,49.09,85.46,13,94-35.25,8.34-45.18-44.89-34-73C5208.31,3556.18,5215.43,3551.71,5225,3546Zm-457,39q0.495-18,1-36c13.52-.6,33.95-2.36,39,6,5.42,5.24,5.36,19.75,0,25C4802.63,3587.75,4780.99,3585.45,4768,3585Zm231-27q7.005,25.995,14,52h-28v-3Q4992.005,3582.505,4999,3558Z"/>


                        <path id="social_3d" class="cls-4" d="M4385,3860c1.33,0.67,2.67,1.33,4,2q-3,88.485-6,177c1.67,0.67,3.33,1.33,5,2v1L3199,4500q-1.5-99.99-3-200,451.95-166.98,904-334Z"/>

                        <a href="{{ route('pages.project') }}">
                            <path id="social_dev" class="cls-5" d="M4394,2913q-3,474.945-6,950-594.945,218.985-1190,438,0.495,98.985,1,198h-1q-115.485-300.975-231-602c-1.99-10.51,28.84-79.22,34-92q45.99-119.49,92-239,52.995-139.485,106-279,94.485-57.495,189-115,209.475-129.99,419-260Q4100.475,2912.5,4394,2913Zm-866,457h-23c2.32,50.39,74.25,60.32,91,20,24.04-57.86-45.36-50.78-67-72-0.27-10.24,2.03-12.68,6-18,18.66-6.35,35.51-2.44,38,17h22c0.43-46.19-63.19-58.34-83-24-33.22,57.58,44.55,56.74,64,76C3577.79,3401.35,3528.58,3398,3528,3370Zm123-96c-19.68,8.97-33.21,15.66-40,37-15.85,49.84,5.62,115.55,62,103C3732.84,3400.68,3736.41,3271.92,3651,3274Zm172,48c-0.25-31.03-31.58-58.3-66-44-22.11,9.19-39.26,42.59-33,79,2.95,17.17,7.12,31.85,16,43,28.61,35.92,79.57,5.71,83-34h-22c-0.67.33-1.33,0.67-2,1-1.37,17.27-19.93,31.83-37,20-21.85-15.14-18.27-77.75,6-87,19.65-6.1,29.04,7.62,32,22h23Zm13-44v133h23V3278h-23Zm73,0q-19.995,66.495-40,133h23c0.67-.33,1.33-0.67,2-1q3.495-13.5,7-27c10.28-.35,37.54-3.27,42,3q3.495,12.495,7,25h26q-19.995-66.495-40-133h-27Zm77,0v133h79v-24h-56V3278h-23Zm223,64h-19c-0.06,8.45-2.15,16.17-6,21-1-.67-2-1.33-3-2q-6.495-10.005-13-20c16.33-16.57,32.85-55.16-5-63-23.92-4.96-39.55,18.18-34,40q4.5,10.005,9,20c-58.81,22.58,4.29,115.94,44,62,1,0.67,2,1.33,3,2l6,9h25v-1l-2-2q-9-13.005-18-26C4202.82,3371.15,4208.61,3359.45,4209,3342Zm-553-45c47.02-1.45,47.27,85.58,12,94-41.24,9.84-46.3-58.4-30-82C3642.18,3302.95,3649.12,3300.53,3656,3297Zm500,0c1.67,0.33,3.33.67,5,1,4.58,1.93,8,6.78,6,12-0.96,7.84-4.96,11.4-10,15h-1C4150.65,3314.13,4143.58,3305.88,4156,3297Zm-248,64q7.005-25.5,14-51h1q6.495,25.5,13,51h-28Zm241-8q10.995,15,22,30c-1.33,1.67-2.67,3.33-4,5C4131.05,3404.03,4132.7,3371.88,4149,3353Zm-484,89v133h23v-60h44v60h24V3442h-24v51h-44v-51h-23Zm109,0c-0.96,55.27-12.1,126.98,35,136,70.99,13.6,56.94-77.72,56-136h-24c1.08,38.8,12.05,143.43-39,106-8.14-27.34-4.1-72.03-4-106h-24Zm108,0v133h22q0.495-54,1-108,10.005,54,20,108,12-.495,24-1,10.005-53.49,20-107h1v108h22V3442c-8.77-.34-29.12-2.52-34,2Q3948,3494,3938,3544c-0.67-.33-1.33-0.67-2-1q-9.495-50.49-19-101h-35Zm159,0q-19.995,66.495-40,133h25q3.495-13.5,7-27,21-.495,42-1,4.005,13.995,8,28h25v-1q-19.995-66-40-132h-27Zm77,0v133h21q0.495-46.5,1-93c0.33,0.67.67,1.33,1,2q22.995,45.495,46,91h22V3442h-21q-0.495,45.495-1,91c-0.33-.67-0.67-1.33-1-2q-22.5-44.49-45-89h-23Zm-64,31q7.5,25.995,15,52h-29Q4047.005,3499.005,4054,3473Zm-745,221h-23c-8.34,43.98-45.01,26.05-52-12-9.16-49.82,45.42-78.77,52-32h23c0.11-31.34-31.72-58.24-66-44-21.42,8.9-38.88,41.97-33,77,4.15,24.74,10.55,44.87,29,55C3274.03,3757.23,3307.34,3725.77,3309,3694Zm47-88q-19.995,66.495-40,133h25q3.495-13.5,7-27,21-.495,42-1v2q3.495,13.005,7,26h26v-1q-19.995-66-40-132h-27Zm77,0v133h24v-48c38.97,1.12,55.3-2.11,61-35,2.2-12.66-.12-28.97-6-37C3499.48,3601.92,3462.88,3605.23,3433,3606Zm98,0v133h23V3606h-23Zm32,0v23h34v110h23q0.495-54.99,1-110h34v-23h-92Zm121,0q-19.995,66.495-40,133h23c0.67-.33,1.33-0.67,2-1q3.495-13.5,7-27c10.28-.35,37.54-3.27,42,3q3.495,12.495,7,25h26q-19.995-66.495-40-133h-27Zm77,0v133h80v-24h-57V3606h-23Zm132,0v133c24.5,0.49,58.66,3.52,73-7,25.75-18.9,33.48-94.26,5-117C3955.6,3602.7,3920.86,3605.45,3893,3606Zm110,0v133h85v-24h-62v-34h55v-23h-55v-29h60v-23h-83Zm91,0q18.99,66.495,38,133,11.505-.495,23-1,18.99-66,38-132h-25q-12,49.995-24,100h-1q-12-49.995-24-100h-25Zm-637,22c13.65-.34,25.05.74,34,4,5.02,9.24,8.12,27.38-3,33-5.47,4.69-20.91,3.33-31,3v-40Zm459,0c12.92-.46,30.22-1.36,38,4,18.58,12.8,13.05,70.41-3,81-7.02,4.64-23.53,3.41-35,3v-88Zm-547,9q7.5,25.995,15,52h-29v-3Q3362.005,3661.505,3369,3637Zm342,52h-28v-3q7.005-24,14-48c0.33,0.67.67,1.33,1,2Q3704.5,3664.5,3711,3689Zm475,23v27h23v-27h-23Z"/>
                        </a>

                        <a href="{{ route('pages.project') }}">
                            <path id="education" class="cls-6" d="M4397,2074q-533.445-.495-1067-1-211.485-570.45-423-1141Q3651.93,466.046,4397,0V2074Zm-977-788v173h90v-29h-58v-48h52v-27h-52v-40h56v-29h-88Zm161,0q-0.495,27-1,54v-2c-64.38-61.48-73.41,98.86-42,120,19.4,13.06,34.77-3.37,45-11v12h28V1286h-30Zm412,0v27h30q-0.495-13.5-1-27h-29Zm-54,8v35q-6,.495-12,1v21q6,0.495,12,1c-0.44,31.67-6.32,83.97,7,104,10.16,3.12,21.62,3.77,35,3v-23c-2.67-.33-5.33-0.67-8-1-1-1.33-2-2.67-3-4q-0.495-39.99-1-80h12v-22h-12v-35h-30Zm-122,114h-28c0.28,14.01-2.32,23.43-8,31-9.17.99-11.37-.68-17-5-3.86-22.11-11.17-84.18,14-85,2.33,1.33,4.67,2.67,7,4a67.814,67.814,0,0,1,3,21h29c0.83-36.95-31.13-64.81-67-43-22.08,13.43-24.79,77.63-14,108,8.51,23.96,55.87,33.33,73,10C3815.86,1439.65,3817.52,1424.5,3817,1408Zm14-40h29q1.005-7.5,2-15c6.81-5.17,12.73-6.86,23-4a44.69,44.69,0,0,1,5,11c-10.76,26.21-50.79,21.55-59,51-14.3,51.32,32.92,61.6,60,36l3,12h29c-12.63-30.39,7.72-93.68-10-120C3894.22,1311.11,3830.79,1322.67,3831,1368Zm244-42c-10.04,4.24-20.05,4.96-26,13-8.67,11.71-9.99,32.04-10,52-0.02,41.94,5.95,80.75,56,71,42.96-8.37,47.07-107.74,18-129C4104.29,1326.63,4090.42,1325.59,4075,1326Zm71,3v130h29c-0.46-32.92-6.51-87.17,8-107,8.64-1.01,11.57.06,17,4,6.89,28.61,2.11,70.64,2,103h29c1.14-53.69,12.74-182.87-56-118q-0.495-6-1-12h-28Zm-516,0c-0.67,27.93-6.03,106.95,5,123,11.13,16.2,43.07,11.34,50-5h1v12h30q-0.495-64.995-1-130h-29c0.41,31.09,6.97,85.47-6,106-3.33.67-6.67,1.33-10,2-2.67-1.33-5.33-2.67-8-4-7.8-27.4-3.11-71.3-3-104h-29Zm363,0v130h30q-0.495-64.995-1-130h-29Zm87,20c9.06-.39,13.24,1.09,16,7,7.11,13.37,7,74.32-4,81-31.72,22.13-25.76-72-17-86C4076.67,1350.33,4078.33,1349.67,4080,1349Zm-517,2c3,0.33,6,.67,9,1,15.82,11.53,18.54,84.64-8,86q-4.005-2.505-8-5c-5.52-21.47-5.5-55.69,0-77C3558.33,1354.33,3560.67,1352.67,3563,1351Zm326,40c7.75,17.69-2.21,41.06-10,48-17.38.62-24.24-16.21-15-30C3869.57,1400.68,3880.77,1396.78,3889,1391Zm508,762v607q-338.97-.495-678-1-175.98-302.475-352-605v-1H4397Zm-319,196q-91.485,8.505-183,17v1c0.33,0.67.67,1.33,1,2q62.49,32.49,125,65,70.485-12,141-24v-1c-1-.33-2-0.67-3-1-32.17-13.54-79.02-4.02-109-20v-4c18.87-1.89,100.2,11.96,119,19,0.69,24.44-.2,48.2-5,68-1.45,5.99-3.58,21.89-1,24,6.28,3.41,17.56,1.8,24,0-2.89-34.45-7.91-50.26-8-88,11.66-.82,60.63-7.31,66-13q-54-15.495-108-31C4118.71,2357.38,4101.02,2349.35,4078,2349Zm-103,70q0.495,22.995,1,46c18.3,24.28,139.64,27.65,162,4,7.11-7.53,4.29-32.93,4-47q-58.995,10.005-118,20C4005.57,2439.64,3990.08,2426.41,3975,2419Zm-9,29q-26.505,12-53,24v1q61.995,19.5,124,39c12.77,4.42,35.86,18.62,52,15q18-8.505,36-17c8.65-3.72,21.63-5.95,27-13q2.505-16.005,5-32c-2-.67-4-1.33-6-2-7.06,8.11-10.09,15.51-21,20-35.29,14.52-140.95,15.34-160-12C3966.2,2465.55,3968.6,2455.12,3966,2448Zm-58,26c-5,9.61-5.28,19.3-2,31q64.995,21,130,42c11.49,4.02,34.99,17.95,49,15q28.5-13.005,57-26c10.72-4.7,49.74-17.13,53-26h-2c-9.11-3.14-22.56,7.74-30,11l-84,36c-0.86-10.92.68-18.73,2-28Q3994.51,2501.505,3908,2474Zm-1,38c-4.77,11.43-5.79,21.46,0,33l177,55q55.5-25.005,111-50c-0.33-.67-0.67-1.33-1-2-2.33-.33-4.67-0.67-7-1l-108,48-1-1c-0.57-11.11-.7-18.05,3-26Q3994.015,2540.01,3907,2512Z"/>
                        </a>
                        
                        <a href="{{ route('pages.project') }}">
                            <path id="security" class="cls-7" d="M2907,932c12.48,10.446,25.71,67.366,33,86q39.99,107.49,80,215,156.48,420.465,313,841-555.45,352.47-1111,705-556.44-352.47-1113-705,212.475-570.45,425-1141Zm-844,858h-30c-0.61,26.06,2.96,47.76,18,58,25.23,17.18,65.14,3.4,74-18,31.33-75.64-74.43-77.3-58-126,2-1.33,4-2.67,6-4,21.56-.96,25.36,9.86,25,30h28c1.5-63.69-73.46-76.82-89-28-22.39,70.35,72.78,60.44,60,119-7.74,6.16-14.36,9.47-27,6C2063.6,1818.03,2062.69,1806.45,2063,1790Zm432-112v27h27v-27h-27Zm47,7v36h-11v22h11c-0.28,33.43-3.02,74.85,4,102,9.39,6.82,20.31,7.08,36,6v-23c-5.94.04-7.77-.3-10-4-6.61-12.21-2.19-62.71-2-81h12v-22h-12v-36h-28Zm-317,121h-26c0.07,10.08-2.34,16.35-5,23-3.61,1.88-8.02,4.2-13,2-11.27-5.33-10.6-24.05-10-41h55c0.81-24.41.14-53.17-13-64-17.71-14.59-53.51-9.51-64,8-14.34,23.94-8.02,103.32,11,115C2196.11,1871.16,2226.12,1843.77,2225,1806Zm92-6h-26a99.135,99.135,0,0,1-3,27c-7.19,5.21-11.9,5.2-19,0-5.64-21.61-7.02-70.47,4-86,3.33,0.33,6.67.67,10,1,3.42,1.62,3.35,1.63,5,5l3,18h26c1.27-38.07-31.72-65.15-64-41-19.65,14.7-20.57,85.49-9,112,9.13,20.92,52.38,25.03,66,5C2316.5,1831.45,2317.54,1816.37,2317,1800Zm139-79h-27v130h28c-0.97-34.43-11.98-104.46,27-97v-37h-1c-13.83,3.88-21.69,9.98-26,23h-1v-19Zm-124,0c-1.3,61.59-18.47,166.69,52,119v11h27V1721h-28c0.37,30.37,7.31,84.95-5,106-5.02,1.27-12.09,3.4-16-1-8.26-9.28-4.5-84.77-4-105h-26Zm163,0v130h27V1721h-27Zm104,150v23c9.7,0.17,21.58,1.75,29-3,13.45-8.6,13.56-32.19,18-50q13.5-59.49,27-119v-1h-28q-8.505,45.495-17,91-7.995-45.495-16-91h-29q11.505,51.495,23,103c3.22,12.72,10.21,29,8,43-0.67,1-1.33,2-2,3Q2605.505,1870.5,2599,1871Zm-401-102h-27c-0.63-11.06-.72-22.06,6-26,5.91-5.55,13.21-1.68,18,2A81.906,81.906,0,0,1,2198,1769Zm1169,384c12.71,5.92,20.79,32.95,28,45q33.495,57.495,67,115l261,446c-0.33.67-.67,1.33-1,2q-265.98,166.485-532,333l-129,81c-13.92,8.74-28.79,23.78-46,28l-720-375Zm-286,458q-1.005-13.005-2-26c13.24-.47,19.37-6.06,28-8l32,9q-0.495,12.495-1,25,27,6.495,54,13c-0.22-30.45,22.23-27.94,26-51-29.96-14.37-56.52-25.04-82-42-6.47-4.31-18.48-17.47-31-14-19.35,5.35-35.08,23.03-51,33-15.44,9.67-36.26,16.01-54,23,3.37,17.34,20.88,20.92,26,34q0.495,8.505,1,17C3043.25,2618.02,3060.9,2612.16,3081,2611Zm-5,13c-17.93,6.69-38.83,3.14-50,16,4.62,19.22-12.16,20.3-8,41,3,14.94,12.28,17.37,19,27q3,9.495,6,19,7.005,9.495,14,19v21c-34.37,15.74-76.37,25.6-108,45v42c-3.36,14.04-13.24,26.12-7,43h255c13.54,0,79.07,2.44,83-3,7.11-14.04-5.6-30.4-8-42q-0.495-20.505-1-41-55.5-22.995-111-46c0.32-21.01,10.27-23.35,16-37q2.505-9.495,5-19c4.91-8.36,14.49-11.53,18-23,6.45-21.08-7.06-26.22-7-48-19.02-5.96-34.87-13.84-61-14-3.59,8.14-12.64,16.49-24,17-9.09-4.45-13.55-11.25-21-17h-10Zm96,29q1.005,8.505,2,17,7.5-2.505,15-5c0.33,0.67.67,1.33,1,2,4.49,22.67-9.63,23.06-16,35q-4.005,13.005-8,26c-9.95,20.11-44.22,37-77,27-19.19-5.85-32.95-19.97-40-38q-1.995-7.995-4-16c-7.94-13.46-20.98-6.78-17-35,0.67-.33,1.33-0.67,2-1,5.7,2.29,8.31,6.27,12,2q1.5-6.495,3-13h3c22.94,7.98,59.76,14.87,91,8Zm-106,101c41.35,17.5,43.88,14.01,86,2v14c-30.57,13.51-56.56,10.8-86-1v-15Zm86,24h2q-13.5,33.99-27,68h-1v-2c-3.26-5.92-7.31-23.26-4-31q4.005-4.5,8-9-6.495-7.5-13-15Q3134.505,2783.5,3152,2778Zm-84,1q17.505,5.505,35,11-5.505,6.495-11,13,4.5,4.995,9,10-2.505,15.495-5,31c-0.67-.33-1.33-0.67-2-1Q3081,2811.005,3068,2779Zm106,5,86,34v35h-1q-42.99-17.505-86-35Q3173.5,2801.005,3174,2784Zm-129,1h3v34q-43.5,16.995-87,34v-35Zm-73,37c-1.33,1.67-2.67,3.33-4,5,0.33,3.67.67,7.33,1,11h13v-2c0.67-2.67,1.33-5.33,2-8-1.33-2-2.67-4-4-6h-8Zm270,0c-3.26,2.94-6.42,5.14-5,10,2.78,11.44,13.01,6.27,17,0v-1C3250.84,2824.9,3251.33,2822.28,3242,2822Z"/>
                        </a>

                        <a href="{{ route('pages.project') }}">
                            <path id="healthcare" class="cls-8" d="M1110,2072q556.44,352.47,1113,705-212.475,570.945-425,1142H423Q211.521,3348.055,0,2777,554.945,2424.53,1110,2072Zm1185,755q361.965,186.975,724,374-133.485,358.965-267,718H1885v-1Q2089.975,3372.555,2295,2827ZM656,2964v173h31v-79h45v79h31V2964H732v68q-22.5-.495-45-1v-67H656Zm336,0v173h29V2964H992Zm105,0v173h29c-0.52-32.91-7.33-91.25,10-108,3.67,0.33,7.33.67,11,1,3.42,1.62,3.35,1.63,5,5,8.1,16.41,2.18,78.75,2,102h28c0.88-43.14,15.64-154.12-40-132l-16,13v-54h-29Zm-54,7v36h-11v22h11c-0.44,32.52-6.01,83.94,7,105,10.51,3.18,21.36,3.46,35,3v-23c-2.33-.33-4.67-0.67-7-1-1.33-.67-2.67-1.33-4-2-4.57-23.31-2.07-55.37-2-82h13v-22q-6.495-.495-13-1v-35h-29ZM870,3092H842c0.385,11.68-1.865,17.41-6,24a29.071,29.071,0,0,1-15,1c-9.611-7.36-9.475-23.61-9-41h59c0.829-26.53-.08-54.06-15-65-19.676-14.42-57.488-7.58-68,10-15.566,26.03-7.937,100.2,11,113,6.93,4.68,16.551,6.02,28,6C858.982,3139.95,870.946,3125.08,870,3092Zm413-6h-27c0.17,12.72-2.02,22.78-7,30-3.33.67-6.67,1.33-10,2-2.33-1.33-4.67-2.67-7-4-5.72-19.09-7.36-70.3,2-86,4.73-1.26,7.81-1.96,13-1,6.91,4.72,8.46,11.83,8,24h28c1.25-38.23-33.15-64.81-67-42-20.38,13.74-23.38,73.58-14,104C1215.62,3157.15,1285.14,3152.71,1283,3086Zm149-79h-28v130h30c-0.54-24.62-7.37-85.29,9-94,4.34-3.94,11.25-4.32,20-4v-36h-1c-17.84,5.13-18.41,11.93-29,23h-1v-19Zm128,85h-28c0.35,11.45-1.92,17.5-6,24a29.072,29.072,0,0,1-15,1c-9.67-7.41-9.47-23.48-9-41h59c0.8-25.47.06-53.15-14-64-19.37-14.96-57.92-9.47-69,9-16.71,27.87-7.66,103.81,14,115C1529.88,3155.57,1561.16,3130.42,1560,3092Zm-674-47h29q1-7.5,2-15c2-1.33,4-2.67,6-4,5.248-2.87,11.333-1.52,17,0,18.5,30.33-46.383,34.16-54,63-7.721,29.24,10.257,60.9,42,50,7.923-2.72,12.2-9.23,18-14q1.5,6,3,12h28v-1c-10.136-28.5,5.816-95.98-9-119C949.562,2988.36,886.607,3000.3,886,3045Zm412,0h28c-0.06-9.65,2.33-15.97,9-19,6.05-3.34,12.48-1.1,18,1,1.97,3.8,4.45,9.54,2,15-10.33,21.57-47.05,18.56-56,43-10.82,29.53,7.52,65.43,41,54q9-7.005,18-14l3,12h28v-1c-12.37-30.26,7.79-94.11-10-120C1360.11,2988.52,1297.82,3000.88,1298,3045Zm-457,10H812c-0.732-13.61.049-23.9,9-28,6.343-1.89,11.17.14,16,2C840.272,3035.9,841.189,3043.86,841,3055Zm690,0h-29c-0.74-13.76-.04-23.87,9-28,6.65-2.2,13.09-.67,16,4C1531.37,3035.93,1531.34,3045.32,1531,3055Zm-588,14c11.154,11.38-1.871,43.81-9,47H924c-4.171-1.72-5.235-2.88-7-7C909.789,3084.09,930.813,3078.03,943,3069Zm412,0c11.42,11.62-2.02,44.23-10,47-2.67.33-5.33,0.67-8,1-2.33-1.33-4.67-2.67-7-4C1321.97,3086.21,1339.37,3080.48,1355,3069Zm1129,215c-32.02,14.61-64.79,24.83-66,69-42.28,5.04-99.04-9.27-118,23-8.64,14.7-3.87,34.7-7,56q0.495,37.995,1,76c6.62,43.72-8.76,97.98,6,133,4.12,9.78,14.32,16.82,25,20,18.12,5.39,49.33,6.13,70,3h69q69,0.495,138,1c28.39,4.26,70.94-2.05,82-17,17.2-23.25,11-166.01,11-212,0-27.64.38-57.68-15-70-25.4-20.34-68.58-5.63-106-12-4.93-7.37-5.55-18.16-10-27C2550.42,3300.06,2525.78,3283.5,2484,3284Zm-1,13c44.42-.98,69.96,19.5,75,57q-63.99-.495-128-1C2440.56,3317.81,2451.73,3311.36,2483,3297Zm-56,69h170c22.37,0,56.47-3.06,70,7,28.48,21.19,13.98,148.87,14,201,0.01,26.55,5.27,59.38-12,71-17.67,11.89-55.88,1.33-81,5q-96.495.495-193,1c-25.89,0-63.19,4-78-8-12.74-10.32-10-38.06-10-61V3441c-0.01-19.24-4.87-45.96,4-59C2331.04,3352.54,2392.83,3378.8,2427,3366Zm-3,122q0.495,28.5,1,57,24.495,0.495,49,1,1.005,23.49,2,47,26.49-.495,53-1,1.5-23.505,3-47h48q0.495-28.5,1-57h-51v-48q-26.505-.495-53-1c10.41,21.64,24.2,43.01,29,70h-1c-0.33-.67-0.67-1.33-1-2-21.56-31.68-29.32-81.36-88-72-16.3,2.6-29.46,2.23-40,10l2,2c8,17.39,72.13,51.42,95,27-1.33-1.67-2.67-3.33-4-5-10.03-3.9-24.81-9.88-35-16v-1c46.18,3.82,71.92,60.99,79,103h-1c-0.33-.67-0.67-1.33-1-2-15.14-21.99-20.89-49.26-42-65h-45Z"/>
                        </a>
                                
                        <a href="{{ route('pages.project') }}" >
                            <path id="entertainment___sports" data-name="entertainment_&amp;_sports" class="cls-9" d="M423,3917H1798q211.485,570.945,423,1142-554.94,351.96-1110,704Q555.555,5410.53,0,5058,211.479,4487.55,423,3917Zm1462,0h867q132.99,358.47,266,717l-723,375Q2090.025,4463.06,1885,3917Zm650,199q-12.495,1.005-25,2c-20.35,3.74-39.78,8.58-57,16-62.28,26.83-109.16,82.67-125,156-5.93,27.46-3.59,66.6-4,97-68.9,14.17-64.15,87.76,1,107,2.98,27.36,63,37.39,80,15,10.87-14.31,2.76-42.31,6-65,9.17-64.31-4.87-94.67-70-80-15.78-155.83,128.84-280.11,280-215,78.55,33.83,119.83,103.49,119,215-19.76-3.26-53.11-6.69-64,7-11.29,14.19-10.93,124.59,0,139,17.03,22.46,75.83,11.19,80-17,65.15-1.77,65.52-96.88,0-106,0.35-35.75,2.29-74.76-5-104C2727.34,4188.07,2652.77,4116.51,2535,4116Zm-9,59q-18,3.495-36,7c-43.49,13.58-76.6,41.03-96,79-5.92,11.59-20.72,36.01-13,53h9c8.18-6.38,7.69-23.85,12-34,9.05-21.33,24.68-42.65,42-56,13.29-10.24,30.7-20.46,48-26,78.19-25.05,149.31,15.46,178,63q10.005,24.99,20,50c6.33,0.01,7.58-.86,11-3v-2c5.02-20.82-13.49-46.2-22-59C2648.39,4200.98,2603.97,4174.23,2526,4175Zm77,180c-6.09,3.18-12.71,5.12-16,11-8.43,15.07,5.4,35.3,21,33C2635.43,4394.95,2635.68,4353.65,2603,4355Zm-140,143v22c28.13,0.63,86.1,8.92,96-12,9.02-15.64-8.3-40.15-13-52l34-25c7.22,26.87,31.7,44.29,71,33q-0.495-10.5-1-21-21-.495-42-1c-5-8.02-5.77-21.51-11-30-7.46-12.11-50.5-44.84-66-48-19.5-3.98-43.42,8.73-59,13l6,21c33.23-10.43,48.98-18.13,73,5-1.67,2-3.33,4-5,6q-10.5,8.505-21,17c-36.51,29.08.72,44.42,11,71h-2Q2498.51,4497.5,2463,4498Zm-112-120c13.3-.2,28.63-0.42,39,2,5.61,8.31,10.22,100.4,4,115-1.58,3.7-6.7,7.04-11,8-12.59,2.82-36.82.75-41-6-6.61-10.67-3.05-96.92,0-112Q2346.5,4381.505,2351,4378Zm345,0c13.3-.2,28.63-0.42,39,2,8.86,13.58,8.11,100.97,2,119-9.63,4.76-43.58,8.33-50-2-5.23-8.42-2.91-63.82-1-76,2.18-13.85-4.35-33.44,5-40C2692.67,4380,2694.33,4379,2696,4378Zm-376,26h4v73h-1C2277.12,4462.43,2285,4423.84,2320,4404Zm436,0c44.81,3.66,43.23,64.16,0,73v-73Zm-326,6v10c26.27,3.86,75.33,5.47,87-10h-87Zm0,32c22.12,0.62,58.07,6.28,64-9v-1q-31.995.495-64,1v9Zm0,22q31.5,0.495,63,1v-1c-0.67-3-1.33-6-2-9-8.13-1.68-55.53-3.05-60,1C2430.67,4458.67,2430.33,4461.33,2430,4464Zm-1907,0v173h90v-29q-29.5-.495-59-1,0.5-23.505,1-47h52v-27q-26.5-.495-53-1,0.5-19.5,1-39h56v-29H523Zm604,0v27h30q-0.495-13.5-1-27h-29Zm-392,8v35H723v22h12c-0.437,31.86-6.436,84.85,7,105,10.46,3.18,21.3,3.47,35,3v-23c-2.333-.33-4.667-0.67-7-1-1.332-.67-2.666-1.33-4-2-4.093-19.52-6.572-61.2-1-82h12v-22H764v-35H735Zm234,0v35H957v22q6,0.495,12,1c-0.518,23.94-4.733,96.92,8,105,8.03,5.09,23.21,2.48,34,2v-23c-6.33.09-8.47-.4-11-4-6.683-13.47-2.181-61.76-2-81h13q-0.5-10.995-1-22H998v-35H969Zm687,0v35h-12v22h12c-0.44,31.86-6.44,84.85,7,105,10.46,3.18,21.31,3.47,35,3v-23c-2.33-.33-4.67-0.67-7-1-1.33-.67-2.67-1.33-4-2-4.22-19.31-6.53-61.37-1-82h12v-22h-13v-35h-29Zm-999,35H629v130h29c-0.4-31.67-6.613-84.72,6-106,4.859-1.31,8.569-2.04,14-1,12.162,9.65,7.325,82.72,7,107h29c0.895-43.12,15.536-149.58-39-132q-9,7.005-18,14v-12Zm217,86H846c0.343,11.24-2,16.63-6,23a29.076,29.076,0,0,1-15,1c-9.517-7.34-9.46-23.74-9-41h59c0.876-27.92-.345-53.6-16-65-18.369-13.37-56.167-6.89-66,9-17.267,27.9-9.308,103.41,13,116C842.578,4656.64,875.118,4630.06,874,4593Zm46-86H892v130h30c-0.58-27.11-7.672-86.1,11-95,3.84-2.22,10.491-2.21,17-2v-36c-18.164,1.15-19.875,12.34-29,22h-1v-19Zm101,39h29q1.005-7.5,2-15c5.76-4.36,11.03-7.13,21-5,2,1.67,4,3.33,6,5,0.33,3,.67,6,1,9-15.25,20.97-51.54,21.9-59,50-13.35,50.3,33.25,60.4,60,35v2q1.5,4.995,3,10h29c-12.63-30.39,7.72-93.66-10-120-13.24-19.67-64.07-15.71-76,2C1022.77,4525.28,1021.27,4536.28,1021,4546Zm184-39h-28v130h29c-0.41-31.68-6.61-84.7,6-106,4.86-1.31,8.57-2.04,14-1,13.26,10.54,8.32,81.04,8,107h28c0.9-43.11,15.56-149.59-39-132q-9,7.005-18,14v-12Zm104,0h-27v130h29c-0.8-25.48-10.66-119.13,21-106,12.88,6.67,8.38,82.91,8,106h29c-0.3-32.5-5-78.36,4-104a28.918,28.918,0,0,1,19-2c12,10.07,7.3,81.56,7,106h28c0.91-45.01,16.54-151.31-42-132-8.43,2.78-12.27,10.58-19,15-7.92-31.72-45.08-11.1-57,1v-14Zm223,86h-28c0.35,13.62-3.12,18.91-10,25-3.33-.33-6.67-0.67-10-1-11.41-5.39-10.6-23.85-10-41h59c0.85-27.11-.68-53.92-16-65-19.28-13.95-57.14-6.42-67,10-15.93,26.52-9,101.38,12,114C1498.12,4656.71,1533.11,4631.49,1532,4593Zm46-86h-28v130h29c-0.4-31.67-6.61-84.72,6-106,4.86-1.31,8.57-2.04,14-1,12.14,9.67,7.32,82.71,7,107h29c0.89-43.11,15.46-149.55-39-132q-9,7.005-18,14v-12Zm-451,130h30q-0.495-64.995-1-130-14.505.495-29,1v129Zm-282-81H816c-0.433-12.02.875-20.12,5-27a34.723,34.723,0,0,1,17-1C844.985,4533.5,845.487,4542.94,845,4556Zm658,0h-29c-1.54-18.59,13.24-45.39,25-24C1503.3,4536.9,1503.33,4546.48,1503,4556Zm1010-25c-11.87,5.73-34.32,21.61-35,34l15,9c15.3-4.53,34.16-28.79,43-41v-1Q2524.5,4531.505,2513,4531Zm-1434,38c6.27,14.44-1.02,38.37-6,46q-6.495,1.005-13,2c-3.2-1.62-4.19-1.85-6-5C1038.19,4589.9,1068.76,4576.4,1079,4569ZM970,4793H939c-8.63,76.48,86.52,84.42,101,30,18.6-69.89-68.117-62.84-69-109q3.5-4.995,7-10a40.423,40.423,0,0,1,21,0c5.9,7.82,9.05,14.46,9,29h30c1.5-66.14-80.558-76.33-96-27-21.908,69.98,79.04,57.98,65,117-6.59,5.41-24.861,14.37-32,2C969.484,4818.75,969.675,4804.88,970,4793Zm-111-31H833c0.479,11.28.2,24.16-5,30v-2c-5.985-7.19-20.579-28.43-18-36,36.82-15.82,28.087-90.03-29-72-41.986,13.26-8.954,68.06-11,70-9.9,11.78-23.823,19.35-29,36-13.421,43.15,21.791,78.88,65,66l20-12q3,5.505,6,11h32v-1q-9.5-16.5-19-33C851.123,4801.55,858.821,4787.68,859,4762Zm485-74v35h-11v22h11c-0.48,23.52-4.51,96.3,8,104,7.04,6.78,21.95,4.77,34,4v-23c-19.16-.89-12.65-63.32-12-85h12v-22h-12v-35h-30Zm-552,13c3,0.33,6,.67,9,1,3.416,1.62,3.346,1.63,5,5,6.32,11.81-4.681,21.47-10,28-0.667-.33-1.334-0.67-2-1-3.162-9.23-8.52-12.46-9-25C787.149,4704.86,788.746,4703.82,792,4701Zm295,22q-13.995.495-28,1v172h30v-53c70.53,62.93,72.09-103.85,41-120-20.27-10.53-32.44,4.53-43,12v-12Zm110-3c-10.46,4.37-19.87,4.66-26,13-8.74,11.89-9.99,31.65-10,52-0.01,41.79,5.57,80.17,55,71,10.36-1.92,21.01-6.67,26-14,15.9-23.35,13.84-100.48-7-115C1226.04,4720.75,1212.51,4719.59,1197,4720Zm99,3h-28v130h30c-0.97-39.04-13.67-97.82,28-97v-36c-19.27,1.18-20.37,12.82-30,23v-20Zm125,87h-27c-1.71,57.03,67.07,59.18,81,26,19.03-45.32-41.25-54.01-52-78v-10c2-1.67,4-3.33,6-5,14.79-4.8,21.01,5.11,20,20h26c1.48-44.81-54.34-59.44-75-29-25.21,37.13,33.7,67.53,49,84,0.06,7.5-1.38,9.77-4,14a34.724,34.724,0,0,1-17,1c-1.67-2-3.33-4-5-6Q1422,4818.5,1421,4810Zm-220-67c29.69-.43,22.96,61.42,17,85-5.03,4.02-13.1,9.1-20,3-13.26-9.09-8.33-66.61-4-83C1196.33,4746.33,1198.67,4744.67,1201,4743Zm-98,1a27.708,27.708,0,0,1,11,5c5.62,21.14,8.91,68.15-5,82-8.01.44-12.22-.13-15-5-12.19-12.89-6.53-62.85-1-78Q1097.995,4746.005,1103,4744Zm-319,30q14.5,24,29,48C769.167,4844.23,756.235,4802.98,784,4774Z"/>
                        </a>
                        
                        <a href="{{ route('pages.project') }}">
                            <path id="real_estate_dev" class="cls-10" d="M3018,4633q352.47,221.475,705,443c-0.33,1-.67,2-1,3l-352,604q-536.94-336.96-1074-674c0.33-.67.67-1.33,1-2Q2657.465,4820.025,3018,4633Zm-126,589h-28c0.33,3.33.67,6.67,1,10h518c-0.33-3.33-.67-6.67-1-10h-24V5025c5.33,3.73,6.36,6.16,11,1-2.49-5.68-9.06-8.37-11-13v-75h-57c-0.33,3.33-.67,6.67-1,10q-11.505-10.995-23-22-8.505-9-17-18c-10.07,5.83-16.18,15.88-24,24q-32.49,33-65,66c-8.4,8.34-28.86,22.29-23,32h1c2.67-1.33,5.33-2.67,8-4v196h-65q0.495-98.49,1-197c5.33,4.14,4.35,6.01,10,3,0.33-.67.67-1.33,1-2-14.52-21.79-12.18-52.82-12-88h-56v11c-7.04-4.71-38.48-34.31-41-41q-20.505,19.995-41,40c-9.28,19.49-80.33,67.94-70,83q4.005-2.505,8-5v196Zm191,0q-29.49-.495-59-1v-90h-65v91h-58V5014q45.99-48,92-96l5,5q42.495,45,85,90v209Zm205-91h-65v91h-57V5015q45.99-48.495,92-97l3,3c6.23,3,86.43,88.76,88,94q-0.495,103.485-1,207-30-.495-60-1v-90Zm-243-185h38c0.34,15.82,4.76,40.39-1,54-2-1.67-4-3.33-6-5l-31-34v-15Zm265,1h39q-0.495,26.49-1,53C3333.94,4989.68,3309.89,4970.59,3310,4947Zm-372,76v19h41v-19h-41Zm73,0v19h42v-19h-42Zm189,0v19h42v-19h-42Zm74,0v19h42v-19h-42Zm-1054,35q556.44,351.96,1113,704-212.475,570.945-425,1142-686.925-.495-1374-1-157.485-424.455-315-849-39.99-107.49-80-215c-5.36-13.79-30.59-67.99-27-78Q1665.95,5409.535,2220,5058Zm718,1v18h41v-18h-41Zm73,0v18h42v-18h-42Zm189,0v18h42v-18h-42Zm74,0v18h42v-18h-42Zm-306,81h47v81q-23.505-.495-47-1v-80Zm264,0h47v81q-23.505-.495-47-1v-80ZM1795,5809v172h30v-76c61.29-1.26,38.44,29.35,47,76h37c-21.39-35.59,5.94-61.17-32-90,22.31-5.32,32.32-44.65,17-67C1879.73,5803.19,1830.1,5808.19,1795,5809Zm335,0v172h29V5809h-29Zm108,0v172h89v-29h-58v-48h53v-27h-53v-40h57v-28h-88Zm202,7q-0.495,18-1,36h-11v21q6,0.495,12,1c-0.25,31.96-3.82,73.11,3,100,10.36,7.53,20.7,7.64,38,7v-23c-19.16-.89-12.65-63.32-12-85h12v-21h-12v-36h-29Zm160,0v36h-12v21h12c-0.44,32.52-6.01,83.94,7,105,10.61,3.21,21.18,3.37,35,3v-23c-2.33-.33-4.67-0.67-7-1-1.33-.67-2.67-1.33-4-2-4.69-23.18-2.08-55.47-2-82h13v-21q-6.495-.495-13-1v-35h-29Zm-775,16c15.6-.38,27.73,1.19,38,5,7.25,12.95,6.5,29.64-2,41-9.39,2.73-22.66,3.12-36,3v-49Zm183,105h-28c0.23,10.59-2.16,16.83-6,23q-6.495,1.005-13,2c-3.2-1.62-4.19-1.85-6-5-6.41-6.87-5.35-23.62-5-37h59c0.69-24.93-.79-53.53-15-64-19.05-14.04-57.46-8.54-68,9-16.96,28.23-8.31,102.65,14,115C1976.56,6000.23,2008.95,5973.66,2008,5937Zm16-48h28c-0.23-15.8,8.02-22.79,24-19l6,6c-1.25,32.38-45.17,26.73-56,51-11.95,26.78,2.5,63.99,35,57,11.17-2.4,15.16-9.86,23-15l3,12h28v-1c-12.26-29.76,7.47-91.13-9-118C2089.03,5834.32,2023.8,5843.48,2024,5889Zm341,49h-26c-1.49,59.55,70.63,58.01,82,23,15.29-47.08-62.29-58.02-53-84q3-3.495,6-7c16.18-.9,20.93,4.9,20,21h26c1.39-44.49-54.35-59.4-75-29-25.16,37.04,33.73,67.54,49,84,0.28,8.58-1.33,12.38-7,15-4.35,1.44-8.73,2.3-13,0C2366.52,5957.63,2364.67,5948.97,2365,5938Zm127-49h29c-0.47-8.89.53-14.01,6-17,3.81-3.49,10.92-3.43,17-2,4.55,3.33,6.59,6.33,7,14-14.3,19.68-49.3,21.84-58,46-10.52,29.23,8.07,63.88,41,53,7.89-2.61,12.29-9.23,18-14l3,12h28v-1c-10.61-29.79,7.09-91.68-9-118C2556.46,5833.31,2493.21,5844.46,2492,5889Zm247,48q-13.995.495-28,1c0.36,11.1-1.83,16.02-6,22-3.93,1.25-9.33,3.08-14,1-11.15-5.3-10.59-24.22-10-41h59c0.9-27.77-.37-53.72-16-65-20-14.44-57.12-5.68-67,11-15.34,25.89-7.89,99.29,11,112C2702.75,6001.38,2740.16,5976.52,2739,5937Zm-760-37h-29c-0.72-13.07-.47-23.91,8-28,6.9-2.35,14.23-1.1,17,4C1979.24,5880.84,1979.32,5890.67,1979,5900Zm731,0h-29c-0.31-11.25,1.3-18.7,4-26,3.97-2.05,11.16-4.68,17-2C2710.45,5876.04,2710.62,5887.09,2710,5900Zm-629,13c10.95,11.16-1.96,43.84-9,47h-12C2036.19,5941.35,2070.5,5920.82,2081,5913Zm469,0c7.75,17.71-2.34,40.94-10,48-8.01.44-12.22-.13-15-5C2507.19,5935.52,2541.25,5919.26,2550,5913Zm-831,112v172c28.3,0.47,71.05,4.47,88-8,24.92-18.34,30.36-119.07,9-148C1800.39,6019.85,1755.87,6024.4,1719,6025Zm427,0v172h29V6025h-29Zm632,7q-0.495,18-1,36h-11v21h12c-0.44,31.88-6.43,84.8,7,105,10.61,3.21,21.18,3.37,35,3v-23c-2.33-.33-4.67-0.67-7-1-1.67-1-3.33-2-5-3q-0.495-40.5-1-81h13v-21q-6.495-.495-13-1v-35h-29Zm-1027,17c12.12-.25,22.93.66,32,3,13.03,17.48,23.98,104.57-2,117-6.08,3.54-22.98,4.38-31,2Q1750.5,6110.01,1751,6049Zm180,104h-28c0.14,10.15-2.33,15.37-5,22-6.22,3.36-16.13,5.04-20-2-6.54-6.84-5.9-26-5-37h59c0.5-24.81-.74-53.5-15-64-19.05-14.02-57.47-8.55-68,9-16.95,28.26-8.37,102.65,14,115C1899.65,6216.23,1931.88,6189.66,1931,6153Zm198,0h-28q-1.5,9.495-3,19-3.495,3-7,6c-8.01.44-12.22-.13-15-5-6.08-6.27-7.29-26.04-5-37h58c0.82-26.33.67-53.12-14-64-19.16-14.21-57.38-8.36-68,9-16.27,26.61-9.05,101.35,12,114C2094.99,6216.63,2129.87,6190.9,2129,6153Zm100-89c-9.9,4.12-20.07,4.21-26,12-15.41,20.23-16.82,89.67-1,111,6.89,9.29,25.97,16.68,45,13,11.5-2.22,21.84-7.42,27-16,14.2-23.61,12.7-97.37-7-112C2258.1,6065.39,2244.85,6063.59,2229,6064Zm97,4h-27v172h29v-53c75.32,66.96,81.77-142.44,15-122-8.29,2.54-10.52,9.98-17,14v-11Zm105,0h-27v129h28c-0.41-31.46-6.52-83.85,6-105,6.9-2.16,10.55-2.8,18-1,13.4,19.56,6.25,75.58,6,106h29c-0.37-30.35-7.1-83.85,5-105,7.06-2.2,11.16-2.81,19-1,13.18,20.27,6.23,75.07,6,106h28c0.9-45.67,16.58-149.08-41-132-9.33,2.77-12.65,10.67-20,15-7.11-23.84-49.28-18.8-56,2h-1v-14Zm223,85h-28c0.29,10.84-2.1,16.74-6,23-3.93,1.25-9.33,3.08-14,1-11.54-5.38-10.61-23.75-10-41h59c0.8-25.67-.52-53.33-15-64-20.05-14.77-59.26-7.97-69,11-15.08,29.36-6.76,101.91,15,113C2623.34,6215.03,2655.01,6189.97,2654,6153Zm46-85h-28v129h29c-0.75-30.13-9.88-107.4,18-108,3.2,1.62,4.19,1.85,6,5,9.34,13.83,4.2,79.4,4,103h28c1.25-56.66,13.45-178.5-56-118h-1v-11Zm-697,0q-7.995,48-16,96h-1q-8.505-48-17-96h-31l30,129c9.11,0.34,30.88,2.73,36-2q15-63.495,30-127h-31Zm-101,48h-29c-0.66-10.98-.98-23.72,8-28,6.9-2.35,14.23-1.1,17,4C1902.24,6096.84,1902.32,6106.67,1902,6116Zm198,0h-29c-1.23-8.44.12-16.44,2-24,2-1.67,4-3.33,6-5q6,0.495,12,1C2099.53,6091.91,2100.56,6103.26,2100,6116Zm132-29c8.3-.23,11.41,1.17,16,4,4.71,14.83,11.15,75.29-3,84-4.35,3.45-11.72,3.93-16,0-13.44-9.22-8.07-66.42-4-83C2227.33,6090.33,2229.67,6088.67,2232,6087Zm393,29h-29c-0.71-12.92-.37-23.95,8-28C2623.11,6081.88,2626.12,6098.42,2625,6116Zm-283-28a27.708,27.708,0,0,1,11,5c5.67,21.1,8.9,68.16-5,82-8.01.44-12.22-.13-15-5-12.19-12.88-6.52-62.89-1-78Q2337,6090.005,2342,6088Z"/>
                        </a>
                            
                        <a href="{{ route('pages.project') }}">
                            <path id="industrial_processing_zones" class="cls-11" d="M4398,5076v607H3367v-1q176.475-303.465,353-607Q4058.97,5075.5,4398,5076Zm-514,138v117c-3.33.33-6.67,0.67-10,1v86q-10.5.495-21,1v26h12v8q-5.505,4.995-11,10c-33.5-2.15-23.91,8.84-40,22-7.88,6.44-16.58,5.98-21,16-7.29,16.54,2.28,38.69,15,42q198.48-.495,397-1c12.65-6.08,19.7-30.55,10-45-4.58-6.82-15.09-7.03-20-13-5.98-7.27-6.09-14.48-15-19-7.23-3.66-19.4-1.31-26-4-17.26-27.01-18.04-75.73-26-112-23.04-.99-85.34-7.03-102,2q-4.5,29.49-9,59h-1q-0.495-37.995-1-76c-2.41-3.03-5.79-2.84-10-4q0.495-57.99,1-116c5.69,0.15,6.77.34,9-3v-30c-0.67-1-1.33-2-2-3-18.23-.27-49.86-4.49-64,2q0.495,16.995,1,34h9v117h-29V5214c3.33-.33,6.67-0.67,10-1,0.51-10.38,4.29-29.15-3-34-11.48-4.79-53.08-3.66-63,1q0.495,16.995,1,34h9Zm-3-29h52v22h-52v-22Zm127,0v22q-25.995-.495-52-1v-20Q3982,5185.505,4008,5185Zm104,25c-10.87,4.7-20.48,5.34-27,14q-2.505,4.995-5,10-10.005,2.505-20,5c-18.53,9.59-27.02,42.04-12,62,12.73,16.92,47.57,11.45,49,13,12.57,19.65,42.74,38.25,70,19,8.96-6.32,10.15-19.22,18-26,11.55-9.98,22.16-7.53,25-27,3.52-24.1-15.94-23.18-25-34-6.05-7.22-6.46-16.2-16-20q-11.505-.495-23-1C4134.09,5219.28,4134,5210.69,4112,5210Zm-220,4q15.495,0.495,31,1c0.33,3.33.67,6.67,1,10-8.42.34-27.36,2.32-32-2v-9Zm75,0q15.495,0.495,31,1v9h-31v-10Zm147,3c14.32,0.9,23.58,6.22,29,16,16.33-2.12,27.47-1.68,34,11l3,9c9.58,8.22,33.34,9.98,20,36-4.79,9.35-13.96,5.45-21,12-7.57,7.04-7.22,19.6-16,26-31.76,23.13-50.48-6.91-64-24-53.96,21.86-76.75-52.1-15-62C4091.87,5225.61,4097.45,5224.12,4114,5217Zm-223,35q0.495-10.5,1-21,15.495,0.495,31,1-0.495,10.5-1,21Q3906.505,5252.505,3891,5252Zm76-21h31v22h-31v-22Zm-76,29h32c-0.33,3.33-.67,6.67-1,10h-1q-15-.495-30-1v-9Zm76,0h31v10h-31v-10Zm-76,17h32v21h-32v-21Zm76,0h31v21h-31v-21Zm-44,29v9h-32c0.33-3.33.67-6.67,1-10Q3907.5,5305.5,3923,5306Zm44-1q15.495,0.495,31,1v9h-31v-10Zm72,6c-7.4,4.62-11.27,6.4-11,19,3.84,8.43,9.94,12.81,22,10,5.56-3.92,8.57-7.74,9-17-2.93-4.56-3.81-7.57-9-10Q4044.5,5312,4039,5311Zm2,7,9,3c2.19,12.93-6.45,15.7-15,9v-1c0.33-2.67.67-5.33,1-8C4037.67,5320,4039.33,5319,4041,5318Zm-74,4q15.495,0.495,31,1v8h-31v-9Zm-76,1h32v8q-16.005-.495-32-1v-7Zm-10,15h128v80H3881v-80Zm152,18q45,0.495,90,1,1.995,13.995,4,28h-99v-1Q4030.505,5370.005,4033,5356Zm-7,46c0.33-3,.67-6,1-9,0.67-.33,1.33-0.67,2-1q49.995,1.005,100,2c0.33,2.67.67,5.33,1,8H4026Zm-2,106q0.495-31.5,1-63c6.17,0.35,9.61.62,12-3v-21c-1.39-1.92-.1-0.6-2-2q-6-.495-12-1c0.67-3,1.33-6,2-9h106q7.995,49.5,16,99H4024Zm-165-82h171v12H3859v-12Zm13,19h145v91H3872v-91Zm19,9c-2.71,6.16-2.31,16.67,0,23,4.53-.86,2.98.12,5-3v-19C3894.33,5454.67,3892.67,5454.33,3891,5454Zm35,0c-2.92,5.5-3.38,18.8,1,23,1.9-1.37,1.64-.97,3-3,3.2-5.39,1.53-13.81,0-20h-4Zm34,0c-2.53,5.08-2.41,15.54-1,22h6v-21C3963.33,5454.67,3961.67,5454.33,3960,5454Zm34,0v23c2-.67,4-1.33,6-2,0.27-7.59.27-16.28-2-21h-4Zm-129,82c-21.43.43-50.56,2.88-63-6-9.25-28.4-1.26-26.13,17-38,6.22-4.04,5.8-15.7,13-20,8.09-4.83,15.66,1.37,24-1q4.5-4.005,9-8v73Zm301,0c0.35-7.57,1.81-22.95-2-27-3.33-.33-6.67-0.67-10-1q-3.495-21.495-7-43c9.18,3.98,19.38,2.01,29,6,9.47,3.93,7.44,11.19,13,19q6,1.995,12,4c14.85,8.51,11.66,28.17,3,40C4194.25,5536.66,4178.78,5536.12,4166,5536Zm-275-49c-2.31,5.35-2.42,15.34-1,22h6v-2c2.4-5.18.98-16.1-1-20h-4Zm36,0c-0.67,1-1.33,2-2,3-2.88,5.37-1.51,13.52,0,20h4c0.67-.33,1.33-0.67,2-1v-21C3929.67,5487.67,3928.33,5487.33,3927,5487Zm33,0c-2.31,6.04-2.13,15.68-1,23h6v-3c1.62-5.02,1.55-14.28-1-18C3962.04,5486.93,3963.62,5487.96,3960,5487Zm35,0c-0.67.33-1.33,0.67-2,1q0.495,10.995,1,22c2-.67,4-1.33,6-2q-0.495-10.5-1-21h-4Zm30,29h134v20H4025v-20Zm373,246V7836q-745.92-466.455-1492-933,211.98-570.45,424-1141H4398Zm-969,405v172h26V6167h-26Zm177,0q-0.495,25.995-1,52v-2c-58.32-64.41-68.39,148.81-10,124,6.09-2.59,8.1-9.26,13-13v11h23V6167h-25Zm312,0v26h24v-26h-24Zm127,0v172h25V6167h-25Zm-231,7v35c-3.33.33-6.67,0.67-10,1v21c3.33,0.33,6.67.67,10,1-0.44,31.88-6.43,84.8,7,105,8.35,2.49,17.38,2.65,28,2v-23c-2.67-.33-5.33-0.67-8-1-6.17-16.94-7.41-63.96-2-84h10v-22h-11v-35h-24Zm-317,35h-23v130h24c-0.43-22.16-4.31-98.95,7-106,2.33-.67,4.67-1.33,7-2,3.39,2.48,5.04,2.9,7,7,7.72,27.15,2.12,69.91,2,101h23c0.84-36.39,13.79-149.21-32-132q-7.5,7.005-15,14v-12Zm256,87c-6.72-.36-18.54-1.31-22,2-14.62,38.95,44.38,59.19,63,32,28.92-42.23-29.46-62.49-39-83-6.83-14.68,10.18-25.73,18-14,3.11,3.49,3.3,8.9,3,16h22c1.46-50.43-55.85-57.89-66-20-12.64,47.22,42.18,47.82,44,83-1.62,3.2-1.85,4.19-5,6-2.45,2.08-7.42,2.81-11,1-3.42-1.62-3.35-1.63-5-5C3752.78,6309.79,3752.8,6302.8,3753,6296Zm106,43h25c-0.91-34.43-12.35-97.53,24-97v-36h-3c-11.44,3.97-17.83,10.99-21,23h-1q-0.495-10.005-1-20-11.505.495-23,1v129Zm98-91h24c-0.14-8.97,1.79-13.81,5-19,4.86-1.31,8.57-2.04,14-1,23.92,21.15-26.74,36.63-35,47-5.31,6.67-7.59,16.44-9,27-4.91,36.66,37.01,56.58,50,25q1.995,6,4,12h23c-4.23-27.77,4.01-103.11-9-122-10.7-15.54-49.93-13.69-60,1C3959.13,6225.11,3957.48,6236.88,3957,6248Zm-263,91h24V6209q-12.495.495-25,1c0.2,32.47,4.16,73.13-2,102-3.87,2.83-4.36,4.33-11,5-3.2-1.62-4.19-1.85-6-5-8.51-13.31-3.2-80.86-3-103q-12,.495-24,1c-0.9,36.12-13.48,149.66,33,131q7.005-6.495,14-13v11Zm224-130v130h24V6209h-24Zm-327,22c2.67,0.33,5.33.67,8,1,13.43,11.01,9.6,62.21,5,81-2,1.33-4,2.67-6,4C3573.92,6322.66,3580.1,6241.34,3591,6231Zm414,40c6.98,15.92-.99,41.27-8,48-2.67-.33-5.33-0.67-8-1-3.42-1.62-3.35-1.63-5-5C3972.4,6291.1,3996.13,6279.77,4005,6271Zm-637,113v172h26v-73c15.3,0.42,32.44.8,42-5,17.89-10.86,25.88-58.96,11-81C3435.23,6379.56,3397.38,6383.27,3368,6384Zm565,0v26h24v-26h-24Zm-539,23a89.212,89.212,0,0,1,26,3c9.83,12.74,9.53,33.18,0,46-7.3,2.09-15.43,3.1-26,3v-52Zm71,149h25c-0.91-34.39-12.26-97.53,24-97v-36h-3c-11.67,4.07-17.41,11.11-21,23h-1q-0.495-10.005-1-20-11.505.495-23,1v129Zm87-133c-8.25,3.68-16.04,4.29-21,11-21.8,29.47-19.49,137.27,37,125,35.57-7.73,39.16-112.69,12-131C3573.32,6423.5,3563.31,6422.7,3552,6423Zm102,82c0.43,12.65-.62,22.62-5,30-1.67.67-3.33,1.33-5,2-1.67-.33-3.33-0.67-5-1-9.04-6.98-11.8-81.41-1-88,12.08-9.79,16.9,11.62,16,23h23c1.25-34.83-23.94-66.31-56-42-19.05,14.44-19.62,88.63-8,114,7.7,16.81,43.15,23.09,56,6,7.23-9.62,9.73-28.78,8-44h-23Zm84,7c0.54,10.33-.69,19.39-7,23a8.607,8.607,0,0,1-9,1c-10.35-5.15-9.55-25.23-9-41h49c1.25-38.31-1.64-79.39-43-71-9.78,1.98-17.11,3.5-22,10-17.39,23.11-13.82,107.84,8,121,34.64,20.89,58.7-11.47,56-43h-23Zm56,1h-22c-1.66,51.73,52.84,62.4,67,28,18.23-44.3-34.48-58.42-44-85,1.97-5.62,3.35-7.44,7-11,2.67,0.33,5.33.67,8,1,3.65,1.65,4.31,2.39,6,6q1.005,7.005,2,14h22c0.97-48.85-55.07-58.68-66-21-14,48.25,47.91,53.55,43,86l-6,6c-3-.33-6-0.67-9-1C3794.94,6532.67,3793.59,6523.55,3794,6513Zm79,0h-22c-1.83,58.01,57.97,59.3,68,23,13.27-48.01-43.3-47.56-45-83,1.62-3.2,1.85-4.19,5-6,2.37-1.59,3.62-1.81,8-2,2.33,1.33,4.67,2.67,7,4q1.5,8.505,3,17h21c1.52-42.79-44.51-60.43-63-28-20.66,36.24,25.89,65.83,41,82,0.23,8.3-1.17,11.41-4,16-0.67.33-1.33,0.67-2,1-3.33-.33-6.67-0.67-10-1-1.33-.67-2.67-1.33-4-2A63.2,63.2,0,0,1,3873,6513Zm124-87q-12,.495-24,1v129h25c-0.43-22.19-4.35-98.93,7-106,2.33-.67,4.67-1.33,7-2,14.97,11.76,9.36,79.8,9,108h23c0.46-39.45,7.88-104.49-9-129-21.24-7.2-24.7,1.63-38,11v-12Zm63,144c0.65,35.32,52.11,38.28,66,14,10.82-18.92,5.68-124.99,5-158h-23c-0.33,3.67-.67,7.33-1,11-49.04-59.58-58.61,66.07-45,104,5.92,16.51,35.4,28.13,43,5h1c0.45,13.35-.38,23.42-5,31-0.67.33-1.33,0.67-2,1-3.33-.33-6.67-0.67-10-1-3.75-1.94-3.75-2.61-5-7h-24Zm-127-144v130h24V6426h-24Zm-378,20c3,0.33,6,.67,9,1,13.59,11.72,8.36,69.77,3,87-8.13,3.06-11.53,2.75-18-2-3.82-22.64-7.1-64.64,2-84C3552.33,6447.33,3553.67,6446.67,3555,6446Zm182,29h-24q1.005-11.505,2-23l6-6c3,0.33,6,.67,9,1,1.33,0.67,2.67,1.33,4,2C3736.11,6456.21,3737.11,6464.4,3737,6475Zm353-27c3,0.33,6,.67,9,1,16.74,8.85,8.94,75.36-1,85h-7C4076.37,6523.73,4078.71,6460.42,4090,6448Zm-547,153v26h48c-18.97,42.96-49.9,88.41-50,146h80v-29h-52c17.01-38.52,49.91-93.3,50-143h-76Zm117,39c-7.28,3.3-15.48,4.12-20,10-21.84,28.39-21.06,138.38,36,126,34.71-7.53,40.43-110.42,14-130C3683.05,6640.85,3672.31,6639.67,3660,6640Zm82,3h-24v130h25c-0.82-26.17-10.01-120.26,19-105,7.88,27.68,3.11,72.01,3,105h24c0.83-35.97,13.34-155.74-35-131l-12,12v-11Zm134,86h-24c0.51,12.99-1.8,19.06-8,25-2.67-.33-5.33-0.67-8-1-8.69-4.39-11.88-28.13-8-41h48c1.25-37.38.23-71.97-36-72-11.25-.01-21.34,3.24-27,9-19.94,20.27-15.97,109.73,6,123C3853.35,6792.75,3876.84,6761.92,3876,6729Zm10,1c-1.11,50.91,52.3,63,67,28,20.53-48.87-51.83-62.77-42-90,1.67-2,3.33-4,5-6,7.34-.26,10.44.47,13,5,2.79,3.85,3.22,8.84,3,16h22c1.37-46.83-52.1-59.22-65-24-17.62,48.11,40.65,52.2,43,86l-6,9c-3.33-.33-6.67-0.67-10-1-7.29-3.52-7.54-13.03-8-23h-22Zm-223-67c2.67,0.33,5.33.67,8,1,15.65,7.81,11.22,74.43,3,88-3,.67-6,1.33-9,2-2.33-1.33-4.67-2.67-7-4C3652.22,6728.15,3648.74,6676.95,3663,6663Zm188,29q-12-.495-24-1l3-24c1.67-1.33,3.33-2.67,5-4,7.85-.16,9.83,1.17,14,4Q3850.005,6679.5,3851,6692Z"/>
                        </a>

                        <a href="{{ route('pages.project') }}">
                            <path id="transportation" class="cls-12" d="M4396,5683V5076h507q85.485,0.495,171,1,176.475,302.97,353,606H4396Zm273-213c13.12-.35,15.95-8.74,24-3,6.54,16.25,13.75,27.22,17,50h3c3.44-9.01,11.76-12.28,14-23,4.55-21.77-6.44-46.16,4-61,26.34-11.65,43.22-47.56,76-50,22.32,12.24,45.69,112.77,58,142q4.005-3.495,8-7c6.54-16.96,13.24-39.03,9-65q-2.505-18.495-5-37l8-8c10.24-4.6,17.02-14,24-22-0.33-3-.67-6-1-9h-4c-11.88,4.48-16.44,14.83-28,18q-1.995-32.49-4-65c13.66-27.72,79.88-60.76,73-99-1.33-1.67-2.67-3.33-4-5-40.95-3.06-70.55,51.24-103,61q-30.495-4.995-61-10c3.4-11.65,24.31-19.99,16-33-18.8.22-31.74,17.15-42,27-47.86-2.64-60.38-31.33-111-2,0.33,0.67.67,1.33,1,2Q4694,5297,4747,5323c10.11,4.83,32.45,9.82,28,25-2.02,11.66-58.38,66.23-69,69l-28-3c-21.18-3.33-34.62,4.22-47,9,0.33,0.67.67,1.33,1,2,17.5,4.35,33.32,12.63,44,24C4675.15,5459.6,4670.07,5459.34,4669,5470Zm-273,292q533.94,0.495,1068,1,211.485,570.435,423,1141-745.425,465.96-1491,932V5762Zm123,645v28h31v144h26V6435h31v-28h-88Zm809,0v26h24v-26h-24Zm-179,7v36h-9v22h9c-0.47,23.33-4.43,96.55,8,104,5.87,5.24,17.47,3.96,27,3v-23c-15.92-1.92-10.59-63.96-10-84h10v-22h-10v-36h-25Zm134,0q-0.495,18-1,36h-9v22h10c-0.25,32.26-3.89,73.82,3,101,8.78,6.45,17.2,7.05,32,6v-23c-2.67-.33-5.33-0.67-8-1-8.04-19.44-3.17-58.05-3-83,3.67-.33,7.33-0.67,11-1v-21c-3.67-.33-7.33-0.67-11-1v-35h-24Zm-658,36h-23v129h25c-0.88-33.56-12.34-97.39,23-97v-36h-3c-10.47,4.1-16.97,10.55-20,22h-2v-18Zm34,38h24c-0.26-9.54,1.64-13.63,5-19q5.505-1.005,11-2c2.33,1.33,4.67,2.67,7,4,6.38,32.67-40.15,31.02-47,60-11,46.5,21.04,64.4,50,36q1.005,6,2,12h24v-1c-10.85-31.7,8.11-91.36-8-119-10.38-17.81-51.21-16.26-62,0C4660.53,6465.74,4659.01,6477.46,4659,6488Zm112-38h-24v129h25c-0.43-22.19-4.35-98.93,7-106,3.27-1.89,4.93-1.71,9-1,12.06,10.12,7.3,82.43,7,107h23c0.46-39.45,7.88-104.49-9-129-21.24-7.2-24.7,1.63-38,11v-11Zm82,86h-22c-0.33,1.67-.67,3.33-1,5,3.46,14.86,2.36,28.76,13,36,21.17,14.42,51,.67,56-18,12.9-48.17-43.13-47.48-45-83,1.62-3.2,1.85-4.19,5-6,2.37-1.59,3.62-1.81,8-2,2.33,1.33,4.67,2.67,7,4q1.5,8.505,3,17h21c1.56-42.87-44.6-60.28-63-28-20.69,36.29,25.89,65.82,41,82,0.23,8.3-1.17,11.41-4,16-0.67.33-1.33,0.67-2,1-3.33-.33-6.67-0.67-10-1-1.33-.67-2.67-1.33-4-2A65.546,65.546,0,0,1,4853,6536Zm83-86h-23v173h24q0.495-26.49,1-53c8.78,10.52,29.35,18.88,40,3,15.38-22.93,16.8-137.47-25-127-8.83,2.21-10.94,9.38-17,14v-10Zm92-4c-8.95,3.8-16.96,4.6-22,12-19.96,29.3-19.08,136.36,38,124,35.25-7.64,39.05-112.85,12-131C5049.4,6446.57,5039.01,6445.74,5028,6446Zm81,4h-23v129h25c-0.87-33.59-12.39-97.39,23-97v-36h-3c-10.03,3.9-17.65,10.59-20,22h-2v-18Zm84,38h24c-0.26-9.54,1.64-13.63,5-19q5.505-1.005,11-2c3.2,1.62,4.19,1.85,6,5q1.5,4.995,3,10c-11.95,17.16-39,22.5-47,42-9.5,23.15-1.5,66.19,30,58,8.6-2.24,11.77-9.62,18-14q1.005,5.505,2,11h24v-1c-11.02-32.16,7.43-90.41-8-119C5245.5,6430.28,5192.7,6444.78,5193,6488Zm203-42c-8.91,4.08-17,5.23-22,13-19.14,29.75-17.72,134.98,38,123,34.96-7.52,40.67-110.51,14-130C5418.97,6446.86,5408.37,6445.7,5396,6446Zm82,4h-24v129h25c-0.37-30.55-7.21-84.7,5-106,4.48-1.16,6.34-1.73,11-1,10.76,9.07,6.29,84.3,6,107h24c0.8-35.94,12.76-143.4-29-133-8.76,2.18-11.41,9.98-18,14v-10Zm-150,0v129h24V6450h-24Zm-297,19c3,0.33,6,.67,9,1,1,1.33,2,2.67,3,4,10.61,15.62,5.56,73.01-3,85h-10C5015.74,6548.08,5017.82,6478.98,5031,6469Zm368,0c2.67,0.33,5.33.67,8,1,15.84,7.71,11.18,74.54,3,88-5.89,1.54-8.11,1.52-14,0C5386.99,6540.82,5386.28,6481.59,5399,6469Zm-454,2c7.73-.12,8.97,1.15,13,4,5.21,19.73,11.08,98.69-18,77C4936.25,6530.7,4931.4,6484.6,4945,6471Zm-238,40c6.29,14.5-.97,39.26-6,47h-10c-1.67-1-3.33-2-5-3C4679.11,6529.27,4693.71,6522.11,4707,6511Zm534,0c5.59,13.06-.7,36.3-4,45-6.86,3.55-11.15,3.11-17-1C5212.51,6529.55,5228.05,6521.8,5241,6511Z"/>
                        </a>

                        <a href="{{ route('pages.project') }}">
                            <path id="broadband___power" data-name="broadband_&amp;_power" class="cls-13" d="M5777,4633q360.96,187.485,722,375c-0.33.67-.67,1.33-1,2q-536.94,336.465-1074,673-176.49-303.465-353-607Q5423.965,4854.525,5777,4633Zm-345,502c1.54,22.86,12.16,42.04,21,59q4.005,6,8,12c1.73,8.92-21.62,24.19-22,43,7.32,14.71,25.15,34.11,40,41,18,4.95,31.51-14.33,43-21,21.83,10.8,43.52,26.45,73,29,0.32,15.85,4.09,35.11,11,45,9.56,3.09,22.97,4.56,31-1,2.19-20.97,6.27-66.64-3-82-23.82-3.45-48.03-7.61-67-16-64.04-28.33-121.37-119.02-85-212,7.9-20.21,19.5-36.5,32-52,16.92-20.98,45.42-38.07,74-47,11.63-3.63,41.85-2.49,48-12,5.79-11.43,3.03-67.12,0-80a35.1,35.1,0,0,0-33,4c-3.49,12.39-5,27.9-9,42-18.37.55-71.89,28.34-74,27-10.66-5.02-24.25-25.59-41-19-8.84,3.5-14.75,11.75-21,18-23.58,23.56-22.66,39.7,3,63l-31,73q-19.5,4.005-39,8c-13.34,9.05-8.04,58.59-1,70A220.8,220.8,0,0,0,5432,5135Zm223-166v18c76.57,1.59,71.52-8.41,70-80,23.99-10.44,22.35-59.76-15-51-26.08,6.12-24.33,41.95-2,51,0.41,20.12,3.05,49.54-5,62h-48Zm0,71v18c31.63,0.43,128.92,7.47,147-5,15.87-10.95,11.36-43.25,11-68,27.54-4.9,19.11-57.63-13-51-28.34,5.85-27.41,40.51-5,52,0.37,17.22,2.44,42.04-4,53Q5723.005,5039.5,5655,5040Zm-31-79q-17.505,4.005-35,8a136.683,136.683,0,0,0-81,96c-16.3,71.3,27.92,122.57,70,144,12.26,6.24,39.25,20.56,58,12,3.85-18,2-43.77,2-65V5033c0-21.39,4.51-56.52-4-71C5630.67,4961.67,5627.33,4961.33,5624,4961Zm31,44v17q46.5-.495,93-1c6.17-4.35,1.53-12.27-1-16h-92Zm-78,24q16.995,0.495,34,1l-2,2q-13.005,19.5-26,39v1q13.5,0.495,27,1l-8,8c-3.9,8.21-59.69,69.4-67,73v-1q16.005-30.99,32-62h-21v-1Q5561.5,5059.505,5577,5029Zm-13,4h2c-11.35,32.96-59.19,33.68-23,89q-3,4.995-6,10-3.495-3-7-6C5508.57,5074.6,5520.43,5055.3,5564,5033Zm45,10c52.79,24.09,19.91,119.83-52,102v-4q4.005-3.495,8-7c53.21,16.36,70.73-51.24,38-81Q5606,5048.005,5609,5043Zm963,14q556.44,352.47,1113,705-212.475,570.435-425,1141H6211q-162.99-.495-326-1-211.98-569.94-424-1140Q6016.45,5409.53,6572,5057Zm-917,26v18h195c4.18,26.41,44.66,20.26,50-4,7.43-33.73-44.66-40.96-50-14H5655Zm0,44v18q67.995,0.495,136,1c1.33,1.67,2.67,3.33,4,5,0.33,15.09,2.88,40.04-3,50-25.23,8.32-15.35,57.77,18,49,32.51-8.55,18.56-37.7,3-52,0.35-22.56,4.4-51.67-8-64C5791.37,5120.44,5685.86,5126.63,5655,5127Zm0,35v18c23.51,0.48,90.36,5.62,97-9-1.9-4.36-2.69-5.98-7-8Q5700,5162.505,5655,5162Zm0,35v18c15.6-.32,40.47-2.8,51,3,2.65,16.92,2.05,40,2,60-25.42,6.96-21.44,46.05,3,51,35.51,7.19,38.76-41.19,14-51C5726.47,5206.6,5731.24,5195.43,5655,5197Zm491,712v173c51.94,1.15,89.1,5.48,98-38,2.39-11.7,2.45-27.6-2-38-4.29-10.03-13.42-10.81-20-18,20.7-4.2,25.44-45.87,13-64C6221.71,5904.62,6178.99,5908.13,6146,5909Zm451,0q-0.495,27-1,54v-2c-10.66-11.7-36.07-18.23-48-2-19.05,25.92-19.43,138.67,32,126,9.36-2.3,12.04-9.77,19-14v11h28V5909h-30Zm50,0v173h28v-12c0.67,0.33,1.33.67,2,1,7.27,20.6,42.56,16.15,51,0,7.06-13.51,7-34.2,7-54,0-52.97-12.87-87.43-59-55v-53h-29Zm369,0v53c-65.37-63.01-73.48,96.21-44,118,18.49,13.67,35.02-1.43,46-9v11h28V5909h-30Zm-839,24c29.56-1.5,37.3,10.56,30,38-5.97,8.17-15.17,8.56-30,8v-46Zm114,19h-28v130h30c-1-39.85-13.53-97.9,29-97v-36c-20.68.89-19.53,14.2-31,23v-20Zm75-3c-8.46,3.58-17.16,4.06-23,10-10.64,10.81-9.27,27.7-12,47-6.45,45.61,7.94,92.34,61,78,33.65-9.1,41.72-106.13,14-127C6396.66,5949.97,6382.85,5948.55,6366,5949Zm98,42c-0.89-19.11,13.66-26.08,28-17q1.005,5.505,2,11c-11.43,20.54-43.11,20.2-55,40-15.17,25.26-.28,68,35,60,9.71-2.2,16.07-12.55,22-14q1.005,5.505,2,11h29c-11.1-29.71,5.24-83.69-7-114-9.65-23.89-63.12-25.54-78-5-4.91,6.78-4.6,16.41-7,26,0.33,0.67.67,1.33,1,2h28Zm286,0q14.505-.495,29-1c-0.45-8.75.67-14.01,6-17,7.68-7.23,18.5-1.04,23,4-1.33,33.61-49.18,26.98-58,57-15.13,51.47,31.22,60.92,60,36l3,12h28v-1c-10.7-30.13,7.49-94.93-10-120C6812.07,5933.87,6749.51,5946.34,6750,5991Zm135-39h-29v130h30c-0.4-30.75-7.13-85.96,6-106,4.67-1.39,8.53-2.09,14-1,12.18,10.09,7.31,82.41,7,107h28c1.33-65.83,18.53-168.37-56-118v-12Zm-515,20c8.31-.5,13.11-0.04,16,5,10.46,11.93,8.58,77.73-4,84-6.07,3.33-12.17,1-17-2-6.33-18.58-6.52-58.46-2-80Zm208,2c7.92-.16,10.59,1.27,15,4,5.1,15.9,12.78,72.48-4,81-3,.67-6,1.33-9,2-2.33-1.33-4.67-2.67-7-4C6565.57,6035.94,6563.52,5987.98,6578,5974Zm109,0c3.33,0.33,6.67.67,10,1,12.91,10.18,13.4,77.77-2,85-5.53,1.52-9.4-.3-14-2C6671.25,6038.28,6670.79,5986.11,6687,5974Zm310,0c7.92-.16,10.59,1.27,15,4,5.73,15.36,12.46,72.86-4,81-3,.67-6,1.33-9,2-2.33-1.33-4.67-2.67-7-4C6985.32,6035.67,6982.42,5988.11,6997,5974Zm-820,83q0.495-27.495,1-55c14.02-.45,23.1,1.88,31,7,4.87,14.97,5.09,33.23-3,45C6198.29,6056.31,6188.42,6057.12,6177,6057Zm316-43c6.24,14.33-.85,38.58-6,46-3.93,1.25-9.33,3.08-14,1-3.66-1.65-4.31-2.39-6-6C6455.15,6032.56,6482.38,6021.7,6493,6014Zm314,0c11.05,11.26-1.91,43.82-9,47-6.87,2.1-11.59-.18-16-3C6774.56,6029.88,6792.58,6025.75,6807,6014Zm-450,194h-25q-1.995,14.505-4,29h-1c-0.33-.67-0.67-1.33-1-2Q6316,6219,6306,6203c8-8.16,17.41-14.36,22-26,11.15-28.27-7.2-56.46-39-51-22.02,3.78-40.69,22.43-30,51,2.59,6.92,10.93,15.45,10,22-64.74,28.14-21.52,144.35,55,89q2.505,5.505,5,11h34c-0.33-1-.67-2-1-3q-9.495-16.005-19-32C6352,6248.96,6357.06,6232.69,6357,6208Zm83-82v173h32v-73c48.54,1.21,65.49-6.06,71-49,1.44-11.24-1.5-28.03-7-36C6522.06,6120.82,6474.19,6125.27,6440,6126Zm-150,21c3,0.33,6,.67,9,1,15.64,7.03,1.59,27.83-6,33v-2c-5.77-5.51-10.93-15.98-9-26Zm181,3c16.43-.54,27.99.81,37,7,10.5,31.59-.89,46.4-37,45v-52Zm114,16c-10.75,4.55-19.74,5.33-26,14-8.2,11.35-6.52,26.33-9,44-6.01,42.86,5.64,87.93,56,78,10.86-2.14,21.09-7.84,26-16,14.21-23.65,12.58-97.28-7-112C6615.66,6166.98,6601.86,6165.55,6585,6166Zm300,89h-28c0.36,11.6-2.11,20.45-10,24h-10c-11.41-5.39-10.6-23.85-10-41h59c0.84-27-.76-53.9-16-65-17.93-13.06-55.71-7.15-66,8-17.45,25.68-10.58,103.05,11,116C6851.12,6318.68,6886.1,6293.41,6885,6255Zm46-86h-28v130h30c-0.97-39.04-13.67-97.82,28-97v-36c-19.46.83-20.44,12.87-30,23v-20Zm-166,130q12-64.995,24-130h-29l-12,96h-1q-8.505-48-17-96c-7.06-.36-20.31-1.51-24,2l-15,90h-1q-6.495-45.99-13-92h-31v1q13.995,64.5,28,129,16.5-.495,33-1c0.13-13.42,6.11-66.28,12-74q7.005,37.5,14,75h32Zm-176-110c8.31-.5,13.11-0.04,16,5,10.51,11.85,8.59,77.81-4,84-5.68,3.09-10.69,1.02-16-1C6575.83,6258.27,6575.61,6201.93,6589,6189Zm267,29h-29c-0.63-15.03.89-22.18,8-29,8.59-.54,14.01-0.2,17,5C6856.24,6198.84,6856.32,6208.67,6856,6218Zm-574,2c8.35,7.28,28.82,38.47,28,49C6265.66,6290.31,6256.93,6248.21,6282,6220Z"/>
                        </a>

                        <a href="{{ route('pages.project') }}">
                            <path id="tourism___hospitality" data-name="tourism_&amp;_hospitality" class="cls-14" d="M6045,3917q431.955,0.495,864,1-204.975,545.445-410,1091-361.47-186.975-723-374Q5910.49,4276.035,6045,3917Zm951,0H8371l315,851q39.99,107.49,80,215c5.33,13.68,30.56,67.01,26,78q-553.95,351.465-1108,703-556.44-352.47-1113-705Q6783.475,4488.055,6996,3917Zm-611,193c-1.72,1.61-2.59,1.88-4,4-1.74,2.52-2.4,4.7-1,8,0.67,1.33,1.33,2.67,2,4l33,6q9.495,6.495,19,13h2s61.65-21.12,63-22c-0.33-3.33-.67-6.67-1-10-23.19-11.03-43.97,7.67-61,12C6427.09,4113.77,6406.18,4109.75,6385,4110Zm-62,44c-2.75,2.3-4.18,2.5-6,6-1.06,4.45-.01,6.45,2,10l26,6c9.15,3.86,10.98,12.37,23,14q10.995-7.5,22-15c8.04-2.94,20.61-.58,25-7v-11c-19.65-9.04-35.46,6.5-50,11C6356.33,4158.81,6340.72,4153.92,6323,4154Zm-257,18c-6.58,3.16-14.7,4.63-19,10-19.28,24.08-1,69.08,36,58C6120.56,4228.75,6113.38,4170,6066,4172Zm3,19c3.67,0.33,7.33.67,11,1q3.495,4.005,7,8c10.99,17.37-20.46,31.1-28,12-0.33-3.33-.67-6.67-1-10C6061.03,4195.93,6063.58,4194.58,6069,4191Zm15,320q0.495-7.005,1-14,6,5.505,12,11c0.67-.33,1.33-0.67,2-1q2.505-9,5-18c-7.12-11.06-16.53-19.13-28-26-8.53,3.28-52.35,41.27-45,52,9.05,13.21,29.43-14.29,34-18-0.51,10.29-1.86,25.62,4,30,15.46,9.78,84.55,2,108,2h200c31.39,4.64,88.25,6.13,116-2,0.33-.67.67-1.33,1-2,0.01-21.42-11.49-39.3-18-56q-24-66.99-48-134c-5.4-15.21-12.3-61.89-33-48q-16.5,45.99-33,92c-0.67-.33-1.33-0.67-2-1q-19.5-53.49-39-107c-4.65-12.92-7.35-35.91-18-43-2-.67-4-1.33-6-2-12.71,7.43-15.65,30.38-21,45q-20.505,54.495-41,109h-1c-4.04-25.14-23.62-78.6-37-97-2.33.33-4.67,0.67-7,1-13.92,7.49-17.99,41.5-24,57q-21.495,57.99-43,116c-6.24,16.14-8.64,42.35-20,54h-19Zm214-245c9.29,9.81,18.13,38.84,20,54l-19,22c-8.83-2.77-15.17-13.77-21-20Q6288.005,4294.01,6298,4266Zm105,56q7.005,18.495,14,37l-14,17c-1.67-1.33-3.33-2.67-5-4q-4.5-5.505-9-11Q6396.005,4341.5,6403,4322Zm-211,1c5.74,4.08,16.99,33.21,13,39l-11,14q-4.5-4.005-9-8l-6-9Q6185.5,4341,6192,4323Zm133,18c10.8,9.98,13.35,36.44,19,51q21.495,59.49,43,119H6210l61-168c9.48,7.46,14.53,22.11,30,23C6310.11,4360.06,6318.61,4349.68,6325,4341Zm99,40q23.49,64.995,47,130h-63l-12-33c-5.02-13.92-26.87-57.26-24-72q4.005-11.505,8-23c0.67-.33,1.33-0.67,2-1,6.06,5.14,13.55,20.32,24,17C6413.15,4395.67,6419.53,4387.12,6424,4381Zm-253,1q10.005,9,20,18c1.67-.33,3.33-0.67,5-1,8.2-3.62,11.89-11.33,18-17h1q4.995,14.505,10,29Q6207.5,4461,6190,4511h-65Q6148,4446.5,6171,4382Zm-98,8c-7.86,6.18-52.98,42.7-39,53,2.52,1.73,4.7,2.4,8,1,14.01-6.24,21.43-21.11,33-30h2c4.13,6.15,33.15,41.3,43,29,1.82-2.27,1.5-5.03,1-7C6118.47,4425.79,6084.49,4391.47,6073,4390Zm1,36c-15.71,12.72-32.15,26.53-44,43,0.33,2.33.67,4.67,1,7,1.62,3.42,1.63,3.35,5,5,1.67,0.33,3.33.67,5,1,31.01-26.77,33.5-43.65,64-2,1,0.33,2,.67,3,1q3-10.005,6-20C6101.29,4451.21,6091.15,4430.1,6074,4426Zm1150,37v28h37v144h32V4491h37v-28H7224Zm373,0v26h30v-26h-30Zm488,81h-26c0.23,12.12-1.7,20.84-4,30-0.33-.67-0.67-1.33-1-2q-10.005-16.5-20-33c9.71-10.97,20.32-17.48,24-35,9.76-46.5-53.93-51.64-70-25-14.18,23.5,11.53,45.13,9,55l-12,9c-12.85,10.29-25.98,33.87-19,60,7.76,29.05,60.43,52.52,84,21,0.67,0.33,1.33.67,2,1q1.995,4.995,4,10h34v-1l-2-2q-9-15.495-18-31C8079.05,4585.82,8084.74,4568.35,8085,4544Zm-65-61c6.49,0.58,8.18,2.27,12,5v2c3.9,12.56-4.14,22.78-12,27-3.09-8.49-14.34-19.83-7-29C8015.11,4484.9,8016.8,4484.94,8020,4483Zm-666,19c-11.73,4.66-22.52,4.51-29,14-8,11.73-6.49,26.09-9,44-6.03,42.99,5.54,87.95,56,78,9.75-1.92,20.24-6.97,25-14,14.88-22.01,14.28-97.52-5-113C7383.24,4503.96,7370.19,4501.6,7354,4502Zm201,4h-28v129h30c-0.99-39.95-13.64-97.84,29-97v-36c-18.82,1.13-20.6,12.05-30,22h-1v-18Zm114,86h-27c-1.46,50.8,58.73,62.37,79,31,25.7-39.78-37.9-64.6-51-86,1-6.5,3-8.01,6-12h2c5.06-1.46,9.45-.27,14,1,3.57,5.27,5.71,9.97,6,19h26c0.92-52.71-69.3-56.57-80-19-13.08,45.9,61,57.78,52,83-1.65,3.65-2.39,4.31-6,6C7673.25,4620.44,7667.99,4607.92,7669,4592Zm100-86h-28v129h30c-0.48-24.52-5.42-98.93,9-106,30.59-8.44,20.73,78.2,20,106h29c-0.49-24.48-5.2-98.91,9-106,7.22-2.23,13.35.1,18,3,6.84,28.13,3.08,69.86,3,103h29c0.69-29.7,5.98-106.08-6-123-12.76-18.02-45.6-8.99-54,6-0.67-.33-1.33-0.67-2-1-8.41-22.35-49.26-17.73-56,3h-1v-14Zm-347,0c-1.16,53.46-13.2,182.32,56,117v12h29V4506h-30c0.37,30.11,7.22,84.19-5,105-4.86,1.31-8.57,2.04-14,1-13.23-10.51-8.32-80.14-8-106h-28Zm175,0v129h30V4506h-30Zm-240,19c3.33,0.33,6.67.67,10,1,10.85,10.28,17.29,79.49,0,88-5.67,3.09-10.69,1.02-16-1C7341.53,4593.72,7341.01,4535.77,7357,4525Zm652,32c9.96,5.89,26.06,34.99,29,47C7999.41,4631.09,7980.51,4582.42,8009,4557Zm-782,122v172h32v-78h44v78h32V4679h-32v67h-44v-67h-32Zm431,0v26h30v-26h-30Zm210,0v172h30V4679h-30Zm49,0v26h30v-26h-30Zm-208,7v36h-11v22h11c-0.57,25.19-4.49,96.42,9,105,7.93,5.04,23.33,2.58,34,2v-23c-2.33-.33-4.67-0.67-7-1-1.67-1-3.33-2-5-3q-0.495-39.99-1-80h13v-22q-6.495-.495-13-1v-35h-30Zm259,0v36h-11v22h11c-0.48,23.37-4.4,95.36,8,103,7.16,6.89,22.76,4.77,35,4v-23c-6.33.09-8.47-.4-11-4-6.62-13.33-2.18-60.95-2-80q6.495-.495,13-1v-21h-13v-36h-30Zm-577,32c-11.19,4.43-21.52,4.26-28,13-16.24,21.92-15.44,93.48,2,113,6.9,7.73,26.98,13.38,44,10,9.75-1.94,20.28-6.91,25-14,15.21-22.86,14.33-98.89-6-114C7419.39,4719.6,7406.26,4717.61,7391,4718Zm91,90h-27c-1.72,59.4,69.82,58.18,82,24,17.78-49.89-51.35-48.99-54-83,1.33-2.33,2.67-4.67,4-7,7.58-2.07,12.07-1.24,19,1,2.23,5.73,3.99,8.99,4,18h26c1.63-55.34-71.4-55.1-80-17-10.83,47.94,49.93,45,54,78-1.33,2.67-2.67,5.33-4,8a34.732,34.732,0,0,1-17,1c-1.67-2-3.33-4-5-6Q7483,4816.5,7482,4808Zm100-86h-28v172h29q0.495-26.49,1-53c53.43,63.53,70.98-65.55,52-107-9.01-19.67-44.45-21.4-53,0h-1v-12Zm180,38h29c-0.19-9.09,1.77-12.84,5-18,7.14-2.31,12.02-2.98,20-1,18.03,29.62-46.42,33.62-54,63-13.21,51.19,32.99,60.17,60,35v2q1.5,4.995,3,10h29c-12.51-30.38,7.72-93.8-10-120-13.15-19.45-64.16-15.56-76,2C7763.71,4739.37,7762.13,4749.94,7762,4760Zm-104-38v129h30V4722h-30Zm259,0v129h30V4722h-30Zm112,149q0.495,11.505,1,23c13.01,0.03,25.51.48,33-5,11.92-8.73,12.83-31.47,17-48q14.505-58.995,29-118v-1c-8.08-.35-25.6-2.11-30,2q-8.505,45-17,90h-1q-8.505-45.99-17-92h-32v1l27,105c3.38,12.13,10.41,30.98,4,42Q8036,4870.5,8029,4871Zm-635-130c9.32-.11,11.29,2.09,16,6,5.8,23.05,11.68,83.35-15,85-4.22-2.72-6.71-3.19-9-8-8.37-17.23-4.91-67.87,3-81C7390.67,4742.33,7392.33,4741.67,7394,4741Zm199,2c3.33,0.33,6.67.67,10,1,15.26,7.69,10.33,62.48,6,80-2,1.67-4,3.33-6,5-3.33-.33-6.67-0.67-10-1-16.42-7.82-12.69-68.84-4-83C7590.33,4744.33,7591.67,4743.67,7593,4743Zm227,40c6.26,14.4-1.05,38.32-6,46-3.93,1.25-9.33,3.08-14,1-3.65-1.65-4.31-2.39-6-6C7781.35,4802,7809.97,4790.35,7820,4783Z"/>
                        </a>

                        <a href="{{ route('pages.project') }}">
                            <path id="trade___commerce" data-name="trade_&amp;_commerce" class="cls-15" d="M7682,2072q555.945,352.47,1112,705-211.485,570.945-423,1142H6996q-160.98-432.96-322-866-39.495-105.99-79-212c-3.59-9.02-22.18-63.82-22-64Q7127.445,2424.53,7682,2072ZM6496,2827c9.57,5.1,24.56,60.21,30,74q38.49,102.495,77,205,152.985,406.455,306,813-431.955-.495-864-1-133.98-358.965-268-718Zm817,146v28h37v144h31V3001h37v-28H7313Zm330,0q-0.495,25.995-1,52c-59.72-57.47-73.76,78.58-48,113,14.85,19.84,38.35,5.51,50-5h1v12h27V2973h-29Zm329,81h-25a98.533,98.533,0,0,1-4,30c-1-.67-2-1.33-3-2-3.87-10.71-20.14-26.64-17-36,29.66-12.25,30.8-66.06-5-73-30.05-5.82-52.65,16.5-45,45l12,27c-29.72,13.01-46.25,70.4-14,94,26.09,19.1,47.88,2.27,69-5q3,5.505,6,11h32q-10.005-16.995-20-34C7964.8,3093.61,7971.95,3080.25,7972,3054Zm-66-61c3,0.33,6,.67,9,1,1.67,2,3.33,4,5,6,3.96,12.82-4.39,22.37-12,27-3.06-8.66-8.76-13.32-10-24,1.33-2.67,2.67-5.33,4-8C7903.33,2994.33,7904.67,2993.67,7906,2993Zm-466,23h-28v129h30c-0.97-38.23-12.74-100.97,28-97v-36h-1c-16.65,5.1-17.87,11.59-28,22h-1v-18Zm337,85h-27c-0.68,12.51-3.34,18.78-10,25-3.67-.33-7.33-0.67-11-1-11.27-5.34-10.6-24.05-10-41h59c0.83-26.4-.21-53.11-15-64-17.43-12.84-55.11-8.99-66,7-17.66,25.93-10.81,102.95,11,116C7743.56,3164.27,7778.14,3139.27,7777,3101Zm-296-48h28c0.05-15.61,7.83-22.93,24-19,4.55,3.33,6.59,6.33,7,14-13.8,19.32-47.57,21.57-57,44-11.01,26.18,2.97,62.95,35,56,11.15-2.42,15.18-9.82,23-15l3,12h28v-1c-12.08-29.56,6.7-87.62-8-116C7548.8,2998.67,7482.31,3006.91,7481,3053Zm143-16c26.73-.2,25.68,76.01,12,84-3.42,3.16-7.64,3.22-13,2-14.64-10.34-12.12-68.96-3-84C7621.33,3038.33,7622.67,3037.67,7624,3037Zm274,29q13.995,24,28,48C7887.34,3142.78,7868.53,3092.3,7898,3066Zm-359,11c7.75,17.71-2.34,40.94-10,48-8.3.23-11.41-1.17-16-4C7505.49,3092.63,7523.72,3088.22,7539,3077Zm-242,224h-31c1.3,24.19-2.22,43.84-28,38-14.67-13.95-19.4-117.32,1-127,9.09-3.38,15.77-.46,22,4,2.56,8,4.97,14.32,5,26h30c0.96-46.46-43.57-77.03-83-47-22.77,17.34-25.04,92.9-16,131C7211.43,3386.84,7299.05,3382.31,7297,3301Zm55-72c-14.79,5.67-26.19,4.83-33,18-6.38,12.34-7,29.82-7,48-0.01,40.44,6.1,79.25,54,70,9.04-1.75,20.27-5.72,25-12,17.36-23.05,16.72-101.53-6-117C7377.27,3230.74,7364.7,3228.87,7352,3229Zm93,4h-26v129h28c-0.24-32.93-3.46-74.04,3-102,4.96-3.83,11.72-7.8,19-4,12.9,6.52,8.38,83.01,8,106h29c-0.78-27.33-10.74-121.07,22-106,12.82,6.5,8.38,83.05,8,106h28c0.92-45.75,16.1-147.44-40-132-9.74,2.68-13.33,10.77-21,15-4.81-13.73-29.21-21.67-45-12q-6.495,7.005-13,14v-14Zm166,0h-27v129h29c-0.49-24.53-5.33-98.88,9-106,31.35-14.18,21.67,79.12,21,106h28c-0.5-24.35-4.91-98.97,9-106,4.95-2.46,9.47-1.37,15,0,11.96,10.09,7.3,81.56,7,106h28c1.26-57.02,11.66-184.47-60-117-0.67-.33-1.33-0.67-2-1-5.04-14.35-31.37-20.01-46-10q-5.505,6-11,12v-13Zm196,85c0.23,10.59-2.16,16.83-6,23-4.03,1.28-10.16,3.18-15,1-9.19-4.4-13.1-27.4-9-41h58c0.89-28.05.15-54.04-16-65-20.67-14.03-57.22-5.49-67,12-17.12,30.6-5.85,105.85,20,115,35.91,12.71,68.77-10.35,62-45h-27Zm74-85h-28v129h29c-1-39.01-12.45-101.05,29-97v-36h-1c-14.79,4.06-23.41,10.16-28,24h-1v-20Zm124,79q-13.995-.495-28-1c0.72,13.9.15,26.71-9,31-6.58,1.97-10.71-.25-15-3-5.63-20.73-8.02-74.06,5-87,16.92-.77,19.75,8.88,19,25h28c0.74-40.24-36.83-64.92-70-40-18.44,13.85-19.97,75.17-11,103C7937.51,3381.92,8006.97,3375.5,8005,3312Zm101,6h-28q-1.5,10.005-3,20c-2,1.67-4,3.33-6,5-8.31.5-13.11,0.04-16-5-6.29-7.15-5.34-23.42-5-37h59c0.77-24.68-.26-52.54-14-63-19.45-14.81-57.84-9.61-69,9-15.52,25.89-7.87,99.29,11,112C8069.53,3382.26,8107.12,3356.99,8106,3318Zm-754-66c7.88-.36,12.03.47,15,5,10.5,11.87,8.72,77.82-4,84-5.67,3.09-10.69,1.02-16-1-8.45-17.63-7.31-62.34-2-83C7347.33,3255.33,7349.67,3253.67,7352,3252Zm454,29h-29c-1.68-10.59.43-20.16,5-27a31.926,31.926,0,0,1,16-1C7805.13,3258.38,7806.42,3268.08,7806,3281Zm271,0h-29c-1.13-18.57.11-29.78,19-29,2.33,1.33,4.67,2.67,7,4A90.775,90.775,0,0,1,8077,3281Zm-2057,55-12,3c-4.13,5.2-9.17,13.8-3,21,5.95,9.08,25.53,7.69,39,6q39,109.485,78,219c-34.23,11.06-38.64,65.53-10,86,16.52,11.8,48.69,9,77,9h172c29.86,0,77.45,9.78,69-24-14.69-9.45-47.23-6-71-6H6191c-25.47,0-79.08,8.36-69-26,5.7-19.44,42.17-14,67-14h203c19.05,0,67.17,6.16,75-6,4.28-4.66,2.8-11.95,1-18-15.92-10.35-53.59-6-79-6q-117.99-.495-236-1c-4.52-3.79-39.62-103.83-42-116q150.48-.495,301-1c35.13-5.72,72.58-.52,64,32-15.67,11.24-44.33,9-72,9H6248c-21.47,0-70.29-6.52-78,8-3.15,5.82-.89,11.29,1,17,20.73,9.96,64.04,4,94,4h154c20.89,0,43.93,3.81,60-3,15.98-6.77,34.84-28.3,29-56-9.45-44.82-58.74-40.01-113-40H6099c-2.66-14.79-28.93-89.69-38-94Zm152,358c-33.78,15.82-23.5,59.87,9,53C6211.88,3740.48,6209.72,3692.91,6172,3694Zm201,0c-34.58,19.09-17.39,63.7,16,52C6417.17,3736.12,6408.58,3692.15,6373,3694Z"/>
                        </a>

                        <a href="{{ route('pages.project') }}">
                            <path id="natural_minerals" class="cls-16" d="M5886,933H7260l424,1142q-555.45,351.96-1111,704-555.45-352.965-1111-706Q5673.98,1503.06,5886,933Zm361,631v172h30V1618c0.33,0.67.67,1.33,1,2q21.99,57.99,44,116h33V1564h-31v116q-21.495-57.495-43-115Q6264.005,1564.505,6247,1564Zm570,0v172h29V1564h-29Zm-335,7v36h-11v22h11c-0.44,32.54-5.75,82.75,7,104,10.54,3.21,22.23,3.6,36,3v-23c-6.33.09-8.47-.4-11-4-6.62-13.33-2.18-60.95-2-80q6.495-.495,13-1v-21h-13v-36h-30Zm-108,74h29c-0.12-8.79,1.85-12.93,5-18,7.09-2.3,12.2-3.07,20-1,2.8,4.11,4.49,6.06,5,13-13.26,23.65-51.17,20.5-59,50-12.33,46.46,43.65,68.86,59,35,0.33,0.67.67,1.33,1,2q1.5,4.995,3,10h29c-11.2-30.28,7.48-94.47-10-120-10.17-14.85-51.29-17.44-68-6C6378.75,1616.33,6374.42,1629.87,6374,1645Zm296-38h-29v129h31c-0.98-39.64-13.63-97.76,28-97v-36h-3c-13.58,4.14-21.24,10.32-26,23h-1v-19Zm41,38h28c0.1-9.75,2.73-13.84,7-19a32.219,32.219,0,0,1,18,0c1.33,2,2.67,4,4,6v9c-10.57,22.52-48.04,18.81-57,45-9.99,29.22,8.71,62.76,42,52,8.16-2.64,11.68-9.72,18-14q1.005,6,2,12h29v-1c-12.19-29.69,7.55-91.31-9-118C6776.06,1589.68,6710.12,1597.75,6711,1645Zm-175-38c-1.39,65.08-17.3,168.72,57,117v12h29V1607h-30c0.25,32.62,3.91,74.45-3,102-35.64,24.22-24.82-72.77-24-102h-29Zm-104,61c6.21,14.26-.85,38.59-6,46a29.072,29.072,0,0,1-15,1c-1.67-2-3.33-4-5-6C6394.17,1686.57,6421.56,1675.86,6432,1668Zm335,1c9.5,9.9-1.3,39.8-5,45a29.072,29.072,0,0,1-15,1c-1.67-2-3.33-4-5-6C6733.63,1685.28,6754.39,1678.19,6767,1669Zm-581,112v172h31V1803q15.495,74.985,31,150h20q15.495-74.49,31-149h1v149h30V1781q-24.495.495-49,1-10.995,53.49-22,107h-2q-11.505-54-23-108h-48Zm165,0v26h30v-26h-30Zm432,0v172h30V1781h-30Zm-354,43h-29v129h30c-0.93-30.23-11.01-127.06,25-103,5.04,29.96,2.06,69.62,2,103h29c0.86-42.45,15.27-150.44-39-132q-9,7.005-18,14v-11Zm133,85c0.35,11.26-1.94,16.71-6,23-7.77,2.44-13.03,1.75-19-2-3.07-9.41-7.51-25.3-4-38h58c0.77-24.27.91-51.23-12-62-17.73-14.79-58.09-12.47-70,6-18.19,28.22-9.21,106.37,15,117,36.12,15.86,73.06-7.8,66-44h-28Zm75-85h-29v129h30c-0.44-29.34-5.18-74.88,7-93,6.46-2.51,11.59-4.13,22-4v-36c-15.74.73-25.16,10.53-29,23h-1v-19Zm40,38h29c-0.12-8.79,1.84-12.93,5-18,7.09-2.3,12.2-3.07,20-1,2.8,4.11,4.49,6.06,5,13-13.26,23.65-51.17,20.5-59,50-12.33,46.46,43.65,68.86,59,35,0.33,0.67.67,1.33,1,2q1.5,4.995,3,10h29c-11.2-30.28,7.49-94.46-10-120-10.17-14.85-51.29-17.44-68-6C6681.75,1833.33,6677.42,1846.87,6677,1862Zm178,48h-27c-1.54,50.9,58.64,62.29,79,31,25.79-39.63-37.98-64.72-51-86,1-6.5,3-8.01,6-12h2c5.06-1.46,9.45-.27,14,1,3.52,5.23,5.54,10.21,6,19h26c0.92-52.66-69.25-56.73-80-19-13.1,45.98,61,57.76,52,83-1.65,3.65-2.39,4.31-6,6C6859.25,1938.44,6853.99,1925.92,6855,1910Zm-504-86v129h30V1824h-30Zm210,48h-29c-0.69-13.09.41-24,9-28C6559.53,1838.02,6562.14,1854.73,6561,1872Zm174,13c6.27,14.44-1.02,38.37-6,46-3.93,1.25-9.33,3.08-14,1-3.65-1.65-4.31-2.39-6-6C6697.12,1903.48,6724.54,1892.87,6735,1885ZM5426,2153q536.445,337.47,1073,675v1q-360.96,186.975-722,374-351.96-220.98-704-442Q5249.475,2457.025,5426,2153Zm65,387c-12.87,18.65-16.4,22.1-35,35v4q10.995,6.495,22,13c5.96,5.87,5.5,16.49,13,21h4c6.97-4.79,7.17-15.17,13-21,5.52-5.52,15.43-5.4,20-12,0.67-1.67,1.33-3.33,2-5l-21-12C5500.9,2556.41,5503.29,2542.9,5491,2540Zm165,21c-26.68,13.95-124.35,49.6-137,68-14.34,20.86-14.02,59.46-21,86-5.36,20.39-16.12,46.12-11,69,38.65-21.47,39.65,12.3,56,35,10.39,14.42,64.65,21.8,42,55q-8.505,6.495-17,13l2,2c3.31,6.91,10.96,12.03,19,14,18.74,4.59,143.03,2.24,153-5,10.48-7.61,89.67-107.82,92-119,2.88-13.81-4.39-28.48-7-39q-10.995-49.995-22-100h-1c-20.39,13.1,8.66,106.79,15,135-14.07-1.71-25.57-10.95-37-16l-99-45c0.67-1,1.33-2,2-3q33.99-22.005,68-44-4.005-6-8-12-37.995,23.49-76,47V2581c16.32,3.03,23.34,15.08,41,17,3.41-4.17,8.67-5.85,11-11C5697.56,2581.94,5683.52,2562.26,5656,2561Zm110,2c-14.87,24.42-18.12,28.42-43,43-0.9,4.57-.72,6.48,1,10,23.59,8.97,29.65,23.27,43,42,6.39-.37,6.43-1.48,10-4,9.81-30.17,31.74-25.72,41-44-6.7-11.47-23.68-11.61-31-22q-5.505-10.995-11-22l-3-3h-7Zm-115,16h3q-0.495,60.495-1,121-52.995-34.5-106-69c0.33-.67.67-1.33,1-2Q5599.5,2604,5651,2579Zm-120,61q56.49,36.99,113,74v1q-70.995,25.995-142,52Q5516.505,2703.505,5531,2640Zm129,97c9.04,8.14,11.27,28.91,16,41,13.84,35.38,30.68,72.62,41,110-18.44.19-118.78,3.13-126-2Q5625.5,2811.51,5660,2737Zm-159,56q-12,19.995-24,40c-11.82,9.86-28.29,13.18-39,24,0.33,2.67.67,5.33,1,8q20.49,12.495,41,25c8.52,10.99,13.1,26.05,21,37,5.54,0.31,6.09.18,11-1q11.505-19.995,23-40c12.03-9.3,27.51-12.39,38-23-0.33-2.67-.67-5.33-1-8q-19.995-12-40-24c-8.43-9.82-9.76-29.24-21-36C5508.55,2793.04,5505.93,2792.89,5501,2793Zm351,53c-10.31,16.95-18.11,23.86-34,35v4c0.33,0.67.67,1.33,1,2q6,2.505,12,5c0.67-2,1.33-4,2-6,8.96,7.32,9.07,24.26,20,34h4l15-24c6.97-4.96,14.09-6.39,20-12v-3c-16.27-11.24-23.73-18.76-35-35h-5Z"/>
                        </a>

                        <a href="{{ route('pages.project') }}">
                            <path id="agriculture" class="cls-17" d="M4397,2074q0.495-1036.89,1-2074,744.42,465.953,1489,932-212.475,570.945-425,1142H4397Zm214-786q-19.5,85.995-39,172h33q4.005-22.005,8-44h37v2l9,42h34v-1q-19.5-85.485-39-171h-43Zm266,0v26h30v-26h-30Zm251,0v172h30V1288h-30Zm51,7v36h-11v22h11c-0.52,22.88-4.22,92.83,6,103,7.15,7.11,24.84,4.66,37,4v-23c-6.33.09-8.47-.4-11-4-6.62-13.33-2.18-60.95-2-80q6.495-.495,13-1v-21q-6.495-.495-13-1v-35h-30Zm-534,96h-27q6.495-35.49,13-71c0.33,0.67.67,1.33,1,2Q4638.5,1356.5,4645,1391Zm142-60h-28c-0.33,3.33-.67,6.67-1,10-12.5-12.1-37.74-21.94-51-2-24.17,36.35-5.59,173.83,50,111,1.17,16.58-1.06,40.39-21,31-3.76-1.96-4.25-4.3-7-7h-28c2.75,35.33,63.3,38.61,80,14C4795.01,1467.36,4787.52,1366.48,4787,1331Zm48,0h-28v129h30c-0.99-39.95-13.64-97.84,29-97v-36c-18.95,1.13-20.55,11.99-30,22h-1v-18Zm145,78a92.622,92.622,0,0,1-3,27c-6.87,5.01-12.4,5.76-20,1-4.99-16.17-9.43-78.81,5-86,2.67-.33,5.33-0.67,8-1,8.4,4.22,10.48,12.03,10,25h28c1.38-38.15-30.32-64.02-66-43-22.86,13.47-27.22,91.51-10,117,15.43,22.84,63.62,16.38,73-7,1.64-4.08,7.5-29.12,3-33h-28Zm387-78h-29v129h30c-0.99-39.27-13.23-97.85,29-97v-36c-15.86.75-24.97,10.59-29,23h-1v-19Zm127,85h-28c0.89,16.32-4.56,27.88-21,24-9.52-7.34-9.46-23.74-9-41h59c0.88-27.71-.39-53.74-16-65-20.2-14.58-58.93-5.75-68,12-14.49,28.35-6.8,99.59,13,112C5459.11,1480,5495.12,1455.18,5494,1416Zm-617-85v129h30V1331h-30Zm147,0c-1.14,53.52-12.82,182,56,117v12h29V1331h-29c0.41,31.51,6.5,83.75-6,105-4.86,1.31-8.57,2.04-14,1-12.13-9.65-7.32-81.81-7-106h-29Zm209,0c-1.42,65.07-17.14,168.6,57,117v12h29V1331h-30c0.25,32.62,3.91,74.45-3,102-35.64,24.22-24.82-72.77-24-102h-29Zm232,48h-29c-0.32-11.39,1.29-18.7,4-26a21.439,21.439,0,0,1,22,1A90.775,90.775,0,0,1,5465,1379Zm-727-27c8.3-.23,11.41,1.17,16,4,6.79,21.58,8.05,68.43-6,82-3.33-.33-6.67-0.67-10-1-15.99-7.72-10.41-62.21-6-80C4734,1355.33,4736,1353.67,4738,1352Zm-341,801H5426q-176.49,303.465-353,607H4397V2153Zm385,428c9.98-.2,16,1.45,23,3v-31c16.55-55.57,81.96-49.85,104-104,17.57-43.17-9.62-99.02-42-109-0.38,79.05-100.24,64.07-52,154l2-2c21.03-10.19,44.39-48.72,52-72h2v1c-12.94,35.08-31.75,57.52-50,85-6.87,10.35-9.1,20.99-18,29h-1c-4.96-28.96-18.02-53.46-26-80-13.65-45.38-8.66-108.66,3-153h2c-3.13,19.55-12.27,54.35-3,75,22.51-11.73,43.43-31.07,30-66-3.73-9.7-11.26-21.84-8-38q5.505-11.505,11-23v-1c-47.07-.6-89.29,33.33-78,86,2.34,10.93,7.07,23.09,13,31l12,12q1.005,25.995,2,52c6.54,31.45,24.1,61.21,20,97-0.67-.33-1.33-0.67-2-1-17.89-42.36-84.18-43.66-112-77l1-1c23.11,12.37,44.93,30.92,78,33v-1c-9.13-35.33-9.98-48.01-47-55-12.79-2.42-22.13-2.24-31-8-9.1-5.91-12.15-17.05-20-24h-1q-4.995,13.995-10,28c-8.75,49.75,28.73,79.61,67,84q19.995-3.495,40-7C4761.86,2524.66,4784.42,2533.62,4782,2581Zm5,12c-4.07,2.36-9.85,8.9-13,10q-7.005-1.005-14-2l-7,7c-2.67-1.33-5.33-2.67-8-4l-14,3c-4.97,9.54-13.52,17.54-16,28-7.94-.84-14.32-1.56-19,3-3.92,2.44-5.35,5.19-6,11h184v-3c-0.51-1.2-20.94-24.97-21-25h-8c-1.33-2.67-2.67-5.33-4-8-8.32-9.22-24.44-12.84-36-8-1.55-5.25-3.32-7.85-8-10C4793.67,2594.33,4790.33,2593.67,4787,2593Z"/>
                        </a>

                    </svg>

                </div>
                
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="features12 cid-sZLnoZzGjA" id="features13-18" uk-scrollspy="cls: uk-animation-fade uk-animation-slide-bottom; repeat: true">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12">
                    <div class="card-wrapper">
                        <div class="card-box align-left">
                            <h4 class="card-title mbr-fonts-style mb-4 display-2">
                                <strong>Why Plateau?</strong>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="item mbr-flex">
                                <div class="icon-box">
                                    <span class="mbr-iconfont mobi-mbri-globe mobi-mbri"></span>
                                </div>
                                <div class="text-box">
                                    <h4 class="icon-title mbr-black mbr-fonts-style display-7">
                                        <strong>Climate</strong>
                                    </h4>
                                    <h5 class="icon-text mbr-black mbr-fonts-style display-4">
                                    Jos Plateau is the coldest state with one of the highest elevated land areas in Nigeria. It has a near temperate climate with average temperature between 18°C and 22°C which influences destination choice in a country and as a result national and global tourist inflow.
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="item mbr-flex">
                                <div class="icon-box">
                                    <span class="mbr-iconfont mobi-mbri-shopping-basket mobi-mbri"></span>
                                </div>
                                <div class="text-box">
                                    <h4 class="icon-title mbr-black mbr-fonts-style display-7">
                                        <strong>Agriculture</strong>
                                    </h4>
                                    <h5 class="icon-text mbr-black mbr-fonts-style display-4">
                                        An unmatched ability of producing diverse exotic crops, fruits, vegetables, cut flowers and livestock at scale compared to every other state in Nigeria. 
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="item mbr-flex">
                                <div class="icon-box">
                                    <span class="mbr-iconfont mobi-mbri-update mobi-mbri"></span>
                                </div>
                                <div class="text-box">
                                    <h4 class="icon-title mbr-black mbr-fonts-style display-7">
                                        <strong>Natural Minerals</strong>
                                    </h4>
                                    <h5 class="icon-text mbr-black mbr-fonts-style display-4">
                                        Plateau is the hub of mining in Nigeria which started as far back as 1902. Tin, Columbite and associated minerals have been exploited for over a century, thus Jos City is nicknamed “TIN CITY”. Over 1000 Mining Ponds have been identified in the state, some of which can be used for recreational, water supply and irrigation purposes.
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="item mbr-flex">
                                <div class="icon-box">
                                    <span class="mbr-iconfont mobi-mbri-home mobi-mbri"></span>
                                </div>
                                <div class="text-box">
                                    <h4 class="icon-title mbr-black mbr-fonts-style display-7">
                                        <strong>Tourism</strong>
                                    </h4>
                                    <h5 class="icon-text mbr-black mbr-fonts-style display-4">
                                        With over 50+ ethnic groups, there's a great diversity in culture, festivals and cuisines and numerous tourist attractions. There are numerous tourist attractions in the state such as Water Falls, Rock Formations, Museums, etc.
                                    </h5>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="item mbr-flex">
                                <div class="icon-box">
                                    <span class="mbr-iconfont mobi-mbri-users mobi-mbri"></span>
                                </div>
                                <div class="text-box">
                                    <h4 class="icon-title mbr-black mbr-fonts-style display-7">
                                        <strong>Governance</strong>
                                    </h4>
                                    <h5 class="icon-text mbr-black mbr-fonts-style display-4">
                                        Winner of the Open Government Partnership Award for Increasing Transparency and Accountability in Extractives at the 2021 OGP Local Innovation Awards.
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
@endsection