{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.themesindustry.com/html/arone/index-four.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Sep 2018 09:02:09 GMT -->
<head>

    <!-- Meta Tags For Seo + Page Optimization -->
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="author" content="">

    <!-- Insert Favicon Here -->
    <link href="imgs/favicon.png" rel="icon">

    <!-- Page Title(Name)-->
    <title>Astick - Home</title>

    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" href="../css/bootstrap.css">

    <!-- Font-Awesome CSS File -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <!-- Slider Revolution CSS File -->
    <link rel="stylesheet" href="../css/settings.css">

    <!--  Fancy Box CSS File -->
    <link rel="stylesheet" href="../css/jquery.fancybox.css">

    <!-- Circleful CSS File -->
    <link rel="stylesheet" href="../css/jquery.circliful.css">

    <!-- Animate CSS File -->
    <link rel="stylesheet" href="../css/animate.css">

    <!-- Cube Portfolio CSS File -->
    <link rel="stylesheet" href="../css/cubeportfolio.min.css">

    <!-- Owl Carousel CSS File -->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">

    <!-- Swiper CSS File -->
    <link rel="stylesheet" href="../css/swiper.min.css">

    <!-- Custom Style CSS File -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Color StyleSheet CSS File -->
    <link href="../css/orange.css" rel="stylesheet" id="color" type="text/css">
    <style>
    
    .ffont{
        font-size: 20px;
        line-height: normal;
        
    }
    .half_section_main .half_section_picture{
    background: url(../imgs/camry.png);
    background-size: 114%;
    background-repeat: no-repeat;
    
}
    </style>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50" id="body"  class="index-light">


<!-- Loader -->

<!-- Loader -->

<div class="loader">

    <div class="loader-inner">

        <div class="spinner">

            <div class="dot1"></div>

            <div class="dot2"></div>

        </div>

    </div>

</div>
<!-- Parent Section -->

<section class="page_content_parent_section">


    <!-- Header Section -->

    <header>

        <!-- Navbar Section -->

        <nav class="navbar navbar-fixed-top {{ Request::is('jobs*') ? 'shrink' : '' }} {{ Request::is('profiles*') ? 'shrink' : '' }}">
            <div class="container-fluid">
                <!--second nav button -->
                <div id="menu_bars" class="right menu_bars">
                    <span class="t1"></span>
                    <span class="t2"></span>
                    <span class="t3"></span>
                </div>
                <!-- Brand and toggle get grouped for better mobile display -->


                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand orange_logo" href="#"><img src="../imgs/astick copy.png" alt="logo"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse  ">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="/home#home" >Home</a></li>
                            <li><a href="#Advertisers" class="scroll">Advertisers</a></li>
                            <li><a href="#Drivers" class="scroll">Drivers</a></li>
                            <li><a href="{!! route('jobs.index') !!}" >Jobs</a></li>
                            <li><a href="#About" class="scroll">About</a></li>

                            {{-- <li><a href="#blog" class="scroll">Blog</a></li> --}}
                            <li><a href="#contact-form" class="scroll">Contact Us</a></li>
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="modal" data-target="#login" href="#">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" data-toggle="modal" data-target="#regist" href="#">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{!! route('profiles.index') !!}">
                                                Profile
                                              </a>
                                              <br>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <div class="sidebar_menu">
                    <nav class="pushmenu pushmenu-right">
                        <a class="push-logo" href="#"><img src="../imgs/astick.png" alt="logo"></a>
                        <ul class="push_nav centered">
                            <li class="clearfix">
                                <a href="#home" class="scroll"><span>01.</span>Home</a>

                            </li>
                            <li class="clearfix">
                                <a href="#skill_section" class="scroll"> <span>02.</span>About</a>

                            </li>
                            <li class="clearfix">
                                <a href="#work" class="scroll"> <span>03.</span>Our Work</a>

                            </li>
                            <li class="clearfix">
                                <a href="#team" class="scroll"> <span>04.</span>Team</a>

                            </li>

                            <li class="clearfix">
                                <a href="#pricing_table" class="scroll"> <span>05.</span>Pricing</a>

                            </li>
                            <li class="clearfix">
                                <a href="#blog" class="scroll"> <span>06.</span>Blog</a>

                            </li>
                            <li class="clearfix">
                                <a href="#contact-form" class="scroll"> <span>07.</span>Contact Us</a>

                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <ul class="social_icon black top25 bottom20 list-inline">

                            <li><a href="#" class="navy_blue facebook"><i class="fa fa-fw fa-facebook"></i></a></li>
                            <li><a href="#" class="navy_blue twitter"><i class="fa fa-fw fa-twitter"></i></a></li>
                            <li><a href="#" class="navy_blue pinterest"><i class="fa fa-fw fa fa-pinterest"></i></a></li>
                            <li><a href="#" class="navy_blue linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>

                        </ul>
                    </nav>
                </div>
            </div>
        </nav>

        <!-- /Navbar Section -->

        <!-- Main Slider Section -->



        <!-- /Main Slider Section -->

    </header>
    @yield('content')
    <footer class="footer_section big_padding bg_navy">

        <div class="container">

            <div class="footer_detail">

                <ul class="footer_links text-center">

                    <li>

                        <a class="anchor_style_default facebook wow zoomInDown" href="#.">

                            <i class="text-center fa fa-facebook "></i>

                        </a>

                    </li>

                    <li>

                        <a class="anchor_style_default twitter wow zoomInUp" href="#.">

                            <i class="text-center fa fa-twitter "></i>

                        </a>

                    </li>

                    <li>

                        <a class="anchor_style_default g_plus wow zoomInDown" href="#.">

                            <i class="text-center fa fa-google-plus "></i>

                        </a>

                    </li>

                    <li>

                        <a class="anchor_style_default linkedin wow zoomInUp" href="#.">

                            <i class="text-center fa fa-linkedin "></i>

                        </a>

                    </li>

                    <li>

                        <a class="anchor_style_default  pinterest wow zoomInDown" href="#.">

                            <i class="text-center fa fa-pinterest"></i>

                        </a>

                    </li>

                </ul>

                <p class="text-center default_text open_sans white_color">&copy; 2018 BlueTech,  All rights reserved. </p>

            </div>

        </div>

    </footer>


    <div id="login" class="modal fade" role="dialog">
            <div class="modal-dialog">
          
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body">
                        <form method="post" action="{{ url('/login') }}">
                            {!! csrf_field() !!}
                
                            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                
                            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                
                            </div>
                            <div class="row">
                                <div class="col-xs-8">
                                    <div class="checkbox icheck">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-xs-4">
                                    <button type="submit" class="btn btn-warning btn-block btn-flat">Login</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                </div>
             
              </div>
          
            </div>
          </div>

    <!-- /Footer Section -->
    <div id="regist" class="modal fade" role="dialog">
            <div class="modal-dialog">
          
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Register</h4>
                </div>
                <div class="modal-body">
                        <form method="post" action="{{ url('/register') }}">

                            {!! csrf_field() !!}
                
                            <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full Name">
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                
                            <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                
                            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                
                            <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                
                            <div class="row">
                                <div class="col-xs-8">
                                    <div class="checkbox icheck">
                                        <label>
                                            <input type="checkbox"> I agree to the <a href="#">terms</a>
                                        </label>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-xs-4">
                                    <button type="submit" class="btn btn-warning btn-block btn-flat">Register</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                </div>
             
              </div>
          
            </div>
          </div>

    <!-- /Footer Section -->
    <div id="quotes" class="modal fade" role="dialog">
            <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                            <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Request quotes</h4>
                            </div>
                            <div class="modal-body">
                                    <div class="row">
                                            {!! Form::open(['route' => 'quotes.store']) !!}
                        
                                               <!-- Name Field -->
<div class="form-group col-sm-6">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control','required'=>'required']) !!}
    </div>
    
    <!-- Company Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('company', 'Company:') !!}
        {!! Form::text('company', null, ['class' => 'form-control','required'=>'required']) !!}
    </div>
    
    <!-- Phone Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('phone', 'Phone:') !!}
        {!! Form::text('phone', null, ['class' => 'form-control','required'=>'required']) !!}
    </div>
    
    <!-- Email Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class' => 'form-control','required'=>'email']) !!}
    </div>
    
    <!-- Type Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('type', 'Type:') !!}
        <select class="select2 form-control" id="type" name="type">
                <option value="Private cars">Private cars</option>
                <option value="Vans, lorries and trucks">Vans, lorries and trucks</option>
              </select>
                </div>
    
    <!-- Fleet Size Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('fleet_size', 'Fleet Size:') !!}
        <select class="select2 form-control" id="fleet_size" name="fleet_size">
                <option value="10 vehicles">10 vehicles</option>
                <option value="20 vehicles">20 vehicles</option>
                <option value="50 vehicles">50 vehicles</option>
                <option value="100 vehicles">100 vehicles</option>
                <option value="more than 100 vehicles">more than 100 vehicles</option>
              </select>    </div>
    
    <!-- Duration Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('duration', 'Duration:') !!}
        <select class="select2 form-control" id="duration" name="duration">
                <option value="1 month">1 month</option>
                <option value="3 months">3 months</option>
                <option value="6 months">6 months</option>
                <option value="1 year">1 year</option>
                <option value="more than 1 year">more than 1 year</option>
              </select>
    </div>
    
    <!-- Budget Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('budget', 'Budget:') !!}
        <select class="select2 form-control" id="budget" name="budget">
                <option value="$10,000 and below">$10,000 and below</option>
                <option value="$20,000 and below">$20,000 and below</option>
                <option value="$40,000 and below">$40,000 and below</option>
                <option value="more than $40,000">more than $40,000</option>
              </select>
    </div>
    
    <!-- Remarks Field -->
    <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('remarks', 'Remarks:') !!}
        <textarea class="form-control" name="remarks" cols="50" rows="2" id="remarks"></textarea>
    </div>
    
    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Request Now', ['class' => 'btn btn-warning']) !!}
        <a href="#" data-dismiss="modal" class="btn btn-default">Cancel</a>
    </div>
    
                                            {!! Form::close() !!}
                                        </div>
                            </div>
                          
                    </div>
            </div>
     </div>

    <!-- /Footer Section -->

</section>

<!-- /Parent Section Ended -->

<!-- jQuery 2.2.0-->
<script src="../js/jquery.js"></script>

<!-- Google Map Api -->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U" type="text/javascript"></script>
<script src="../js/map.js" type="text/javascript"></script>

<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="../js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="../js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="../js/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="../js/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="../js/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="../js/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="../js/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="../js/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="../js/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="../js/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="../js/revolution.extension.video.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Owl Carousel 2 Core JavaScript -->
<script src="http://www.themesindustry.com/html/arone/js/owl.carousel.js"></script>
<script src="http://www.themesindustry.com/html/arone/js/owl.animate.js"></script>
<script src="http://www.themesindustry.com/html/arone/js/owl.autoheight.js"></script>
<script src="http://www.themesindustry.com/html/arone/js/owl.autoplay.js"></script>
<script src="http://www.themesindustry.com/html/arone/js/owl.autorefresh.js"></script>
<script src="http://www.themesindustry.com/html/arone/js/owl.hash.js"></script>
<script src="http://www.themesindustry.com/html/arone/js/owl.lazyload.js"></script>
<script src="http://www.themesindustry.com/html/arone/js/owl.navigation.js"></script>
<script src="http://www.themesindustry.com/html/arone/js/owl.support.js"></script>
<script src="http://www.themesindustry.com/html/arone/js/owl.video.js"></script>

<!-- Fancy Box Javacript -->
<script src="../js/jquery.fancybox.js"></script>

<!-- Wow Js -->
<script src="../js/wow.min.js"></script>

<!-- Appear Js-->
<script src="../js/jquery.appear.js"></script>

<!-- Countdown Js -->
<script src="../js/jquery.countdown.js"></script>

<!-- Parallax Js -->
<script src="../js/parallax.min.js"></script>

<!-- Cube Portfolio Core JavaScript -->
<script src="../js/jquery.cubeportfolio.min.js"></script>

<!-- Circliful Core JavaScript -->
<script src="../js/jquery.circliful.min.js"></script>

<!-- Swiper Slider Core JavaScript -->
<script src="../js/swiper.min.js"></script>

<!-- Custom JavaScript -->
<script src="../js/script.js"></script>

</body>


<!-- Mirrored from www.themesindustry.com/html/arone/index-four.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Sep 2018 09:02:10 GMT -->
</html>

