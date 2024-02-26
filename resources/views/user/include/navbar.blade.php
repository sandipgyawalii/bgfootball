 <!--================= Header Section Start Here =================-->
 <header id="rtsHeader" class="rts-header1">
    <div class="navbar-sticky">
        <div class="navbar-part navbar-part1">
            <div class="container">
                <div class="navbar-inner">
                    <a href="index.html" class="logo"><img src="assets/img/logo/logo.jpeg" alt="BG-football-logo"
                            width="70px" style="mix-blend-mode:normal"></a>
                    <a href="index.html" class="logo-sticky"><img src="assets/img/logo/logo.jpeg" width="70px"
                            alt="BG-Football-logo"></a>
                    <div class="rts-menu">
                        <nav class="menus menu-toggle">
                            <ul class="nav__menu">
                                <li class="has-dropdown"><a class="menu-item active1" href="{{ route('home') }}">Home</a>
                                </li>
                                <li><a class="menu-item" href="{{ route('about') }}">About</a></li>
                                <li class="has-dropdown"><a class="menu-item" href="{{ route('karken') }}">Karken</a>
                                </li>
                                <li class="has-dropdown"><a class="menu-item" href="{{ route('facilites') }}">FAcilites</a>
                                </li>
                                <li class="has-dropdown"><a class="menu-item" href="{{ route('team') }}">Our
                                        Team</a>
                                </li>
                                <li><a class="menu-item" href="{{ route('gallery') }}">Gallery</a></li>
                                <li><a class="menu-item" href="{{ route('contact') }}">Contact</a></li>
                                @if(Auth::check())
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                <li><button href="" class="menu-item">Logout</button></li>
                                </form>
                                @else
                                <li><a href="{{ route('login') }}" class="menu-item">Login</a></li>
                                @endif
                            </ul>
                        </nav>
                    </div>
             
                    <a class="hamburger-menu aitem d-block">
                        <div class="hamburger-menu-inner">
                            <span></span>
                            <span class></span>
                            <span></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!--================= Slide Bar Start Here =================-->
    <aside class="slide-bar">
        <div class="offset-sidebar">
            <button class="slide-bar-close ml--30"><i class="fal fa-times"></i></button>
            <div class="offset-widget offset-logo mb-30">
                <a href="index.html">
                    <img src="assets/img/logo/logo.jpeg" alt="logo" width="100px">
                </a>
            </div>
        </div>
        <!-- side-mobile-menu start -->
        <nav class="side-mobile-menu side-mobile-menu1">
            <ul id="mobile-menu-active">
                <li class="has-dropdown firstlvl">
                    <a class="mm-link" href="index.html">Home <i class="rt-angle-down"></i></a>
                </li>
                <li><a class="mm-link" href="about.html">About</a></li>
                <li><a class="mm-link" href="about.html">Karken</a></li>
                <li><a class="mm-link" href="about.html">Facilites</a></li>
                <li><a class="mm-link" href="about.html">Our Team</a></li>
                <li><a class="mm-link" href="about.html">Gallery</a></li>
                <li><a class="mm-link" href="contact.html">Contact</a></li>
            </ul>
        </nav>
        <!-- side-mobile-menu end -->
        <div class="side-bar-social-links">
            <a href="#0" class="platform"><i class="fab fa-facebook-f"></i></a>
            <a href="#0" class="platform"><i class="fab fa-twitter"></i></a>
            <a href="#0" class="platform"><i class="fab fa-behance"></i></a>
            <a href="#0" class="platform"><i class="fab fa-youtube"></i></a>
        </div>
    </aside>
    <!--================= Slide Bar Start Here =================-->

   @yield('banner')
</header>
<!--================= Header Section End Here =================-->