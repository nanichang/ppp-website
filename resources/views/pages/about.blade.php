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

    <section data-bs-version="5.1" class="tabs content18 cid-t0WxAe4XGT" id="tabs1-1p">
        <div class="container">
            <div class="row justify-content-center mt-4">
                <div class="col-12 col-md-10">
                    <ul class="nav nav-tabs mb-4" role="tablist">
                        <li class="nav-item first mbr-fonts-style">
                            <a class="nav-link mbr-fonts-style show active display-7" role="tab" data-toggle="tab" data-bs-toggle="tab" href="#tabs1-1p_tab0" aria-selected="true">
                                <strong>Our Vision</strong>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mbr-fonts-style active display-7" role="tab" data-toggle="tab" data-bs-toggle="tab" href="#tabs1-1p_tab1" aria-selected="true">
                                <strong>Our Mission</strong>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mbr-fonts-style active display-7" role="tab" data-toggle="tab" data-bs-toggle="tab" href="#tabs1-1p_tab2" aria-selected="true">
                                <strong>Our Functions</strong>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab1" class="tab-pane in active" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="mbr-text mbr-fonts-style display-7">
                                        Foremost catalyst for Private Sector Participation in Plateau States Development, resulting in Significant Economic Growth &amp; Prosperity for ALL Residents.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="tab2" class="tab-pane" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="mbr-text mbr-fonts-style display-7">
                                        - To be the most trusted MDA for developing and closing infrastructure investments.
                                        <br>- To create the most suitable private investor ready and friendly environment.
                                        <br>- To ensure valuable economic and developmental impact in Plateau State.
                                        <br>- To be the most reliable investor data resource center.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="tab3" class="tab-pane" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="mbr-text mbr-fonts-style display-7"></p>
                                    <p>-&nbsp;&nbsp;&nbsp;&nbsp;Promote and develop State infrastructure investments.
                                        <br>-&nbsp;&nbsp;&nbsp;&nbsp;Ensure efficient execution of partnership Agreements or Contracts by any Government or MDAs with private sector, including support to LGAs.
                                        <br>-&nbsp;&nbsp;&nbsp;&nbsp;Set and maintain legal, institutional, standards and regulatory frameworks for new development in infrastructural projects with private sector.
                                    </p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-bs-version="5.1" class="team1 cid-t0WqHG1Yhx mbr-parallax-background" id="team1-1m">
        <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(187, 187, 187);">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
                        <strong>Our Team</strong>
                    </h3>
                    
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card-wrap profile-card">
                        <div class="image-wrap">
                            <img src="{{ URL::asset('assets/images/img_avatar.png') }}" alt="Mobirise Website Builder">
                        </div>
                        <div class="content-wrap">
                            <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-5"><strong>Felix Rwang-Dung</strong></h5>
                            <h6 class="mbr-role mbr-fonts-style align-center mb-3 display-4"><strong>Director General</strong></h6>
                            <!-- <p class="card-text mbr-fonts-style align-center display-7">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum diam eu tellus cursus.</p> -->
                            <div class="social-row display-7">
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-facebook"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-twitter"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-instagram"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-youtube"></span>
                                    </a>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card-wrap profile-card">
                        <div class="image-wrap">
                            <img src="{{ URL::asset('assets/images/img_avatar.png') }}" alt="Mobirise Website Builder">
                        </div>
                        <div class="content-wrap">
                            <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-5">
                                <strong>Rose B. David</strong>
                            </h5>
                            <h6 class="mbr-role mbr-fonts-style align-center mb-3 display-4">
                                <strong>Director of Finance & Supplies</strong>
                            </h6>
                            <!-- <p class="card-text mbr-fonts-style align-center display-7">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum diam eu tellus cursus.
                            </p> -->
                            <div class="social-row display-7">
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-facebook"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-twitter"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-instagram"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-youtube"></span>
                                    </a>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card-wrap profile-card">
                        <div class="image-wrap">
                            <img src="{{ URL::asset('assets/images/img_avatar.png') }}" alt="Mobirise Website Builder">
                        </div>
                        <div class="content-wrap">
                            <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-5">
                                <strong>Barry Calvin</strong>
                            </h5>
                            <h6 class="mbr-role mbr-fonts-style align-center mb-3 display-4">
                                <strong>Director of Internal Audit</strong>
                            </h6>
                            <!-- <p class="card-text mbr-fonts-style align-center display-7">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum diam eu tellus cursus.
                            </p> -->
                            <div class="social-row display-7">
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-facebook"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-twitter"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-instagram"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-youtube"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card-wrap profile-card">
                        <div class="image-wrap">
                            <img src="{{ URL::asset('assets/images/img_avatar.png') }}" alt="Mobirise Website Builder">
                        </div>
                        <div class="content-wrap">
                            <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-5">
                                <strong>Kurnap L. Gambo</strong>
                            </h5>
                            <h6 class="mbr-role mbr-fonts-style align-center mb-3 display-4">
                                <strong>Acting Director of Administration</strong>
                            </h6>
                            <!-- <p class="card-text mbr-fonts-style align-center display-7">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum diam eu tellus cursus.
                            </p> -->
                            <div class="social-row display-7">
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-facebook"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-twitter"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-instagram"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-youtube"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card-wrap profile-card">
                        <div class="image-wrap">
                            <img src="{{ URL::asset('assets/images/img_avatar.png') }}" alt="Mobirise Website Builder">
                        </div>
                        <div class="content-wrap">
                            <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-5">
                                <strong>Stacy Benedict</strong>
                            </h5>
                            <h6 class="mbr-role mbr-fonts-style align-center mb-3 display-4">
                                <strong>Executive Assistant</strong>
                            </h6>
                            <!-- <p class="card-text mbr-fonts-style align-center display-7">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum diam eu tellus cursus.
                            </p> -->
                            <div class="social-row display-7">
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-facebook"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-twitter"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-instagram"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-youtube"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card-wrap profile-card">
                        <div class="image-wrap">
                            <img src="{{ URL::asset('assets/images/img_avatar.png') }}" alt="Mobirise Website Builder">
                        </div>
                        <div class="content-wrap">
                            <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-5">
                                <strong>Mantim Wuyep</strong>
                            </h5>
                            <h6 class="mbr-role mbr-fonts-style align-center mb-3 display-4">
                                <strong>Legal Support</strong>
                            </h6>
                            <!-- <p class="card-text mbr-fonts-style align-center display-7">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum diam eu tellus cursus.
                            </p> -->
                            <div class="social-row display-7">
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-facebook"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-twitter"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-instagram"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-youtube"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card-wrap profile-card">
                        <div class="image-wrap">
                            <img src="{{ URL::asset('assets/images/img_avatar.png') }}" alt="Mobirise Website Builder">
                        </div>
                        <div class="content-wrap">
                            <h5 class="mbr-section-title card-title mbr-fonts-style align-center m-0 display-5">
                                <strong>David C. Dung</strong>
                            </h5>
                            <h6 class="mbr-role mbr-fonts-style align-center mb-3 display-4">
                                <strong>Projects Support</strong>
                            </h6>
                            <!-- <p class="card-text mbr-fonts-style align-center display-7">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum diam eu tellus cursus.
                            </p> -->
                            <div class="social-row display-7">
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-facebook"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-twitter"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-instagram"></span>
                                    </a>
                                </div>
                                <div class="soc-item">
                                    <a href="" target="_blank">
                                        <span class="mbr-iconfont socicon socicon-youtube"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
