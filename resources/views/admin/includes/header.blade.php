<div class="header">

    <div class="header-left">
        <a href="index.html" class="logo">
            <img src="{{ asset('assets/img/logo/logo.jpeg') }}" alt="Logo">
        </a>
        <a href="index.html" class="logo logo-small">
            <img src="{{ asset('assets/img/logo/logo.jpeg') }}" alt="logo" width="130" height="100px">
        </a>
    </div>

    <div class="menu-toggle">
        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fas fa-bars"></i>
        </a>
    </div>

    <div class="top-nav-search">
        <form>
            <input type="text" class="form-control" placeholder="Search here">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>


    <a class="mobile_btn" id="mobile_btn">
        <i class="fas fa-bars"></i>
    </a>


    <ul class="nav user-menu">



        <li class="nav-item zoom-screen me-2">
            <a href="#" class="nav-link header-nav-list win-maximize">
                {{-- <img src="{{ asset('assets/dummy/boy.png') }}" alt> --}}
            </a>
        </li>

        <li class="nav-item dropdown has-arrow new-user-menus">
            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <span class="user-img">
                    <img class="rounded-circle" src="{{ asset('assets/dummy/boy.png') }}" width="31" alt="Admin">
                    <div class="user-text">
                        <h6>Admin</h6>
                        <p class="text-muted mb-0">Administrator</p>
                    </div>
                </span>
            </a>
            <div class="dropdown-menu">


                <a class="dropdown-item" href="">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="btn p-0">Logout</button>
                    </form>
                </a>
            </div>
        </li>

    </ul>

</div>
