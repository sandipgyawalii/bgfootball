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
                            <li><a class="current-page" href="#">CONTACT</a></li>
                        </ul>
                    </div>
                    <h1 class="banner-heading">CONTACT US</h1>
                </div>
            </div>
        </div>
    </div>
    <!--================= Banner Section End Here =================-->
@endsection
@section('content')
        <!--contact-area start-->
        <div class="contact-area">
            <div class="container">
                <div class="address-box">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="address">
                                <div class="icon"><i class="far fa-map-marker-alt"></i></div>
                                <div class="content">
                                    <h3 class="heading">
                                        Location
                                    </h3>
                                    <p class="desc">Pokhara , Nepal</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="address">
                                <div class="icon"><i class="far fa-envelope-open"></i></div>
                                <div class="content">
                                    <h3 class="heading">
                                        MAIL US 24/7
                                    </h3>
                                    <p class="desc">basantagauchan@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="address">
                                <div class="icon"><i class="far fa-phone-volume"></i></div>
                                <div class="content">
                                    <h3 class="heading">
                                        SPONSORS ONLY
                                    </h3>
                                    <p class="desc">+97712345890</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-area-inner">
                    <div class="row align-items-start">
                        <div class="col-lg-6 col-md-12">
                            <div class="map">
                                <p><iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3651.0452483624595!2d90.424043!3d23.781403!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3cc42b4e4b430164!2sReacThemes!5e0!3m2!1sen!2sbd!4v1656420500360!5m2!1sen!2sbd"
                                        height="500" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                            </div>  
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <form class="contact-form mb-10">
                                <h3 class="post-title mb-35">GET IN TOUCH</h3>
                                <div class="info-form">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="input-box name mb-20">
                                                <input type="text" id="validationDefault01" placeholder="Your Name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="input-box email mail-input mb-20">
                                                <input type="email" id="validationDefault02" placeholder="Your E-mail"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="input-box message text-input mb-20">
                                                <textarea name="Message" id="validationDefault05" cols="30" rows="10"
                                                    placeholder="Write Your Message" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-15">
                                            <button type="submit" class="form-btn form-btn4">
                                                LEARN MORE
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--contact-area end-->
@endsection