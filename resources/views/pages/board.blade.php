@extends('layout.master')

@section('css') 
     <style>
        .profile-card {
            margin-top: 40px;
            margin-botton: 40px;
        }
    </style>
@endsection

@section('content')
    <section data-bs-version="5.1" class="info3 cid-t0VvFBaY4l mbr-parallax-background" id="info3-1k" style="z-index: 0; position: relative; ">
        <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(40, 120, 26);">
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="card col-12 col-lg-10">
                    <div class="card-wrapper">
                        <div class="card-box align-center">
                            <h4 class="card-title mbr-fonts-style align-center mb-4 display-1"><strong>Our Team</strong></h4>
                            <p class="mbr-text mbr-fonts-style mb-4 display-7"></p>
                            
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
                <!-- <div class="col-12">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2">
                        <strong>Our Team</strong>
                    </h3>
                    
                </div> -->
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