@extends('user.layout.app')
@section('banner')
        <!--================= Banner Section Start Here =================-->
        <div class="banner banner1">
            <div class="inner-page-banner banner-bg">
                <div class="container">
                    <div class="banner-content">
                        <div class="page-path">
                            <ul>
                                <li><a class="home-page-link" href="{{ route('home') }}">Home</a></li>
                                <li><a class="current-page" href="{{ route('about') }}">About Us</a></li>
                            </ul>
                        </div>
                        <h1 class="banner-heading">ABOUT US</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Banner Section End Here =================-->
@endsection

@section('content')
    
<!--================= About Section Start Here =================-->
<div class="rts-about-section  about section-gap">
    <div class="container">
        <div class="about-inner">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <div class="about-thumb">
                        <div class="img1"><img src="assets/images/gallery/img4.jpg" alt="about-thumb"></div>
                        <div class="img2"><img src="assets/images/gallery/img5.jpg" alt="about-thumb"></div>
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="contents">
                        <div class="section-title-area section-title-area1 text-start">
                            <h1 class="section-title"><span>ABOUT THE</span> <br> CLUB KESTER</h1>
                            <p>Nulla habitant commodo euismod feugiat aenean quisque platea ac, nisl potenti <br>
                                fusce
                                conubia ventis blandit iaculis, curabitur enim inceptos a odio taciti sapien. <br>
                                Dictumst dis metus inceptos curae fermentum nvel, ridiculus a dapibus egestas <br>
                                penatibus mus, cubilia fusce iaculis</p>
                        </div>
                        <ul>
                            <li class="player">
                                <p class="sub">MANAGER</p>
                                <h3 class="title">PRO 05</h3>
                            </li>
                            <li class="player">
                                <p class="sub">PLAYERS</p>
                                <h3 class="title">PRO 107</h3>
                            </li>
                            <li class="player">
                                <p class="sub">COACH</p>
                                <h3 class="title">PRO 19</h3>
                            </li>
                        </ul>
                        <a href="team.html" class="more-btn">OUR TEAM <i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================= About Section End Here =================-->

  <!--================= Sponsors Section Start Here =================-->
  <div class="rts-sponsors-section section-gap">
    <div class="container">
        <div class="section-title-area section-title-area1 text-center mb--50">
            <span class="pretitle">SPONSOR</span>
            <h1 class="section-title">HAPPY SPONSORS</h1>
            <p>It is one of the most popular football clubs that offer training programs
                for the youth, as well as summer camps.</p>
        </div>
        <div class="sponsors-section-inner">
            <div class="swiper rts-brandSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#0" class="sponsor-single">
                            <div class="sponsors-logo"><img src="assets/images/brands/1.png" alt="sponsor"></div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#0" class="sponsor-single">
                            <div class="sponsors-logo"><img src="assets/images/brands/2.png" alt="sponsor"></div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#0" class="sponsor-single">
                            <div class="sponsors-logo"><img src="assets/images/brands/3.png" alt="sponsor"></div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#0" class="sponsor-single">
                            <div class="sponsors-logo"><img src="assets/images/brands/4.png" alt="sponsor"></div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#0" class="sponsor-single">
                            <div class="sponsors-logo"><img src="assets/images/brands/5.png" alt="sponsor"></div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#0" class="sponsor-single">
                            <div class="sponsors-logo"><img src="assets/images/brands/6.png" alt="sponsor"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================= Sponsors Table Section End Here =================-->
@endsection