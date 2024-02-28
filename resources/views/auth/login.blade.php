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
                                <li><a class="current-page" href="#">Login</a></li>
                            </ul>
                        </div>
                        <h1 class="banner-heading">Login</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Banner Section End Here =================-->
@endsection

@section('content')
      <!--login-area start-->
    <div class="login-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 mr-10">
                    <div class="login-form">
                        <div class="section-title">
                            <h2>Login</h2>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('login') }}" method="post">
                                    @csrf
                                    <div class="form">
                                        <input name="email" type="text" class="form-control" id="username"
                                            placeholder="Username or email address*" autofocus required  />
                                            @error('email')
                                                <span class="text-danger fs-6">{{ $message }}</span>
                                            @enderror
                                    </div>
                                    <div class="form">

                                        <div class="password-input">
                                            <input name="password" type="password" class="form-control" id="password"
                                                placeholder="Password*" required />
                                                
                                            <span class="show-password-input"></span>
                                        </div>

                                        @error('password')
                                        <span class="text-danger fs-6">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form">
                                        <input type="checkbox" class="form-check-input" id="remember" />
                                        <label for="remember" class="form-label">Remember Me</label>
                                    </div>
                                    <div class="form">
                                        <button type="submit" class="btn">Login <i
                                                class="fal fa-long-arrow-right"></i></button>
                                    </div>
                                    <a class="forgot-password" href="#">Lost your password?</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-6 col-md-12 ml-10">
                    <div class="register-form">
                        <div class="section-title">
                            <h2>Registration</h2>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('register') }}" method="post">
                                    <div class="form">
                                        <input name="name" type="text" class="form-control" id="username"
                                            placeholder="Username*" required />
                                    </div>
                                    <div class="form">

                                        <input type="email" class="form-control" id="username" name="emailaddress"
                                            placeholder="Email address*" required />
                                    </div>
                                    <div class="form">
                                        <div class="password-input">
                                            <input type="password" class="form-control" id="password"
                                                placeholder="Password*" required name="password" />
                                            <span class="show-password-input"></span>
                                        </div>
                                    </div>
                                    <div class="form">
                                        <button type="submit" class="btn">Register <i
                                                class="fal fa-long-arrow-right"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!--login-area end-->
@endsection