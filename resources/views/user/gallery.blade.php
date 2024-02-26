@extends('user.layout.app')
@section('banner')
<!--================= Banner Section Start Here =================-->
<div class="banner banner1">
    <div class="inner-page-banner banner-bg">
        <div class="container">
            <div class="banner-content">
                <div class="page-path">
                    <ul>
                        <li><a class="home-page-link" href="index.html">Home</a></li>
                        <li><a class="current-page" href="#">Gallery</a></li>
                    </ul>
                </div>
                <h1 class="banner-heading">OUR GALLERY</h1>
            </div>
        </div>
    </div>
</div>
<!--================= Banner Section End Here =================-->
@endsection
@section('content')
     <!--================= Gallery Section Start Here =================-->
     <div class="rts-gallery-section">
        <div class="container">
            <div class="top-wrap">
                <div class="filter-button-group">
                    <button class="filter-btn active" data-show=".fifa20">FIFA 2023</button>
                    <button class="filter-btn" data-show=".uefacup">UEFA CUP</button>
                    <button class="filter-btn" data-show=".warmup">WARM-UP</button>
                    <button class="filter-btn" data-show=".national">NATIONAL</button>
                </div>
            </div>
            <div class="filterd-items fifa20">
                <div class="gallery-grid">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full1.png" title="Football.png"><img
                                        src="assets/images/gallery/1.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                            </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full2.png" title="Football.png"><img
                                        src="assets/images/gallery/2.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full3.png" title="Football.png"><img
                                        src="assets/images/gallery/3.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full4.png" title="Football.png"><img
                                        src="assets/images/gallery/4.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full5.png" title="Football.png"><img
                                        src="assets/images/gallery/5.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full6.png" title="Football.png"><img
                                        src="assets/images/gallery/6.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filterd-items uefacup hide">
                <div class="gallery-grid">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full2.png" title="Football.png"><img
                                        src="assets/images/gallery/2.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full1.png" title="Football.png"><img
                                        src="assets/images/gallery/1.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                            </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full4.png" title="Football.png"><img
                                        src="assets/images/gallery/4.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full3.png" title="Football.png"><img
                                        src="assets/images/gallery/3.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full6.png" title="Football.png"><img
                                        src="assets/images/gallery/6.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full5.png" title="Football.png"><img
                                        src="assets/images/gallery/5.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filterd-items warmup hide">
                <div class="gallery-grid">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full1.png" title="Football.png"><img
                                        src="assets/images/gallery/1.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                            </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full2.png" title="Football.png"><img
                                        src="assets/images/gallery/2.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full3.png" title="Football.png"><img
                                        src="assets/images/gallery/3.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full4.png" title="Football.png"><img
                                        src="assets/images/gallery/4.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full5.png" title="Football.png"><img
                                        src="assets/images/gallery/5.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full6.png" title="Football.png"><img
                                        src="assets/images/gallery/6.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filterd-items national hide">
                <div class="gallery-grid">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full2.png" title="Football.png"><img
                                        src="assets/images/gallery/2.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full1.png" title="Football.png"><img
                                        src="assets/images/gallery/1.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                            </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full4.png" title="Football.png"><img
                                        src="assets/images/gallery/4.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full3.png" title="Football.png"><img
                                        src="assets/images/gallery/3.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full6.png" title="Football.png"><img
                                        src="assets/images/gallery/6.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="gallery-item">
                                <a class="gallery-image image-popup-vertical-fit"
                                    href="assets/images/gallery/full5.png" title="Football.png"><img
                                        src="assets/images/gallery/5.png" alt="gallery-image">
                                    <button class="pop-btn"><i class="fal fa-plus"></i></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Gallery Section End Here =================-->
@endsection