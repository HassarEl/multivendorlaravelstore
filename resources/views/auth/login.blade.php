<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Login Page</title>
<!-- Favicon-->
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Custom Css -->
<link href="{{ asset('assets/backend/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/backend/css/main.css') }}" rel="stylesheet">
<link href="{{ asset('assets/backend/css/authentication.css') }}" rel="stylesheet">

<!-- adminX You can choose a theme from css/themes instead of get all themes -->
<link href="assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-blue" id="authentication">
    <div class="authentication">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xl-8 col-lg-6 col-md-12 p-l-0">
                    <div class="l-detail">
                        <h5 class="position">Welcome</h5>
                        <h1 class="position">Admin<img src="{{ URL::asset('assets/backend/images/logo.svg') }}" alt="profile img"></h1>
                        <h3 class="position">Sign in to start your session</h3>
                        <p class="position">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>                            
                        <ul class="list-unstyled l-social position">
                            <li><a href="#"><i class="zmdi zmdi-facebook-box"></i></a></li>                                
                            <li><a href="#"><i class="zmdi zmdi-linkedin-box"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-pinterest-box"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>                            
                            <li><a href="#"><i class="zmdi zmdi-google-plus-box"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-behance"></i></a></li>
                            <li><a href="#"><i class="zmdi zmdi-dribbble"></i></a></li>                            
                        </ul>
                        <ul class="list-unstyled l-menu">
                            <li><a href="#">Contact Us</a></li>                                
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 p-r-0">
                    <div class="card position">
                        <h4 class="l-login">Login</h4>
                        <form class="col-md-12" id="sign_in" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                </div>
                            </div>
                            <div>
                                <input class="form-check-input filled-in chk-col-cyan" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                                
                            </div>
                            <button type="submit" class="btn btn-raised g-bg-blue waves-effect">Sign In</button>
                            
                            <div class="text-left"> <a href="{{ route('password.request') }}">Forgot Password?</a> </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Jquery Core Js --> 
<script src="{{ URL::asset('assets/backend/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="{{ URL::asset('assets/backend/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js --> 

<script src="{{ URL::asset('assets/backend/plugins/sketch/sketch.min.js') }}"></script><!-- sketch Animation Js --> 

<script src="{{ URL::asset('assets/backend/bundles/mainscripts.bundle.js') }}"></script><!-- Custom Js --> 
<script src="{{ URL::asset('assets/backend/js/pages/authentication/sketch.js') }}"></script><!-- sketch Js -->
</body>
</html>
