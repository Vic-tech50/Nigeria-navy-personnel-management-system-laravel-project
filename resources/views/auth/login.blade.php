
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Personnel management System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href = "{{asset('css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href = "{{asset('css/font-awesome.min.css') }}">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href = "{{asset('css/nalika-icon.css') }}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href = "{{asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href = "{{asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href = "{{asset('css/owl.transitions.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href = "{{asset('css/animate.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href = "{{asset('css/normalize.css') }}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href = "{{asset('css/meanmenu.min.css') }}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href = "{{asset('css/main.css') }}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href = "{{asset('css/morrisjs/morris.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href = "{{asset('css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href = "{{asset('css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href = "{{asset('css/metisMenu/metisMenu-vertical.css') }}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href = "{{asset('css/calendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href = "{{asset('css/calendar/fullcalendar.print.min.css') }}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
     <link rel="stylesheet" href = "{{asset('w3/w32.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href = "{{asset('css/responsive.css') }}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body style="background-image: url('bg.jpg');  -webkit-backdrop-filter: blur(15px); height: 100%;">
    
   
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

   
   
    <div class="container" style = "margin-top: auto" >
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12">
                <div class="text-center m-b-md custom-login mt-8" style = "margin-top: 100px" >
                    <img src="logo.svg" style="width: 100px; height: 100px;">
                    <h3 class="w3-text-black"><b>PERSONNEL MANAGEMENT SYSTEM </b></h3>
                  
                </div>
                <div class="hpanel">
                    <div class="panel-body w3-card-12 w3-round-large" >

                        
                      <form method="POST" action="{{ route('login') }}"  style="padding: 25px">
                        @csrf


                            <div class="form-group">
                                <label class="control-label text-dark" for="username"><b><i class="fa fa-envelope"></i> Email </b></label>
                                <input type="email" style="height: 50px; background: white;"  title="Please enter you username"  value="{{ old('email') }}" placeholder="Enter Your Email" name="email" id="email" class="w3-round-large w3-text-black form-control @error('email') is-invalid @enderror" required autocomplete="email" autofocus>
                                 @error('email')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="help-block small">Your unique username to app</span>

                            </div>
                            
                            <div class="form-group">
                                <label class="control-label text-dark" for="password"><i class="fa fa-lock"></i> Password</label>
                                <input type="password" style="height: 50px; background: white" title="Please enter your password" required name="password" id="password" class=" w3-round-large w3-text-black form-control @error('password') is-invalid @enderror"  autocomplete="current-password">
                                   @error('password')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="help-block small">Your strong password</span>
                            </div>


                         




                            <div class="checkbox login-checkbox">
                                <label>
										<input type="checkbox" style="margin-left: 5px;" class="w3-check" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me </label>
                                <p class="help-block small">(if this is a private computer)</p>
                            </div><br>




                         



                            <button class="btn btn-success btn-block" style="padding: 20px">SIGN IN</button>

                            <center>

                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </center>
                           
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
        
    </div>


     @include('sweetalert::alert')
 <!-- jquery
		============================================ -->
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{asset('js/bootstrap.min.js') }}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{asset('js/wow.min.js') }}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{asset('js/jquery-price-slider.js') }}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{asset('js/jquery.meanmenu.js') }}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{asset('js/owl.carousel.min.js') }}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{asset('js/jquery.sticky.js') }}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{asset('js/jquery.scrollUp.min.js') }}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{asset('js/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{asset('js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{asset('js/metisMenu/metisMenu-active.js') }}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{asset('js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{asset('js/sparkline/jquery.charts-sparkline.js') }}"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{{asset('js/calendar/moment.min.js') }}"></script>
    <script src="{{asset('js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{asset('js/calendar/fullcalendar-active.js') }}"></script>
	<!-- float JS
		============================================ -->
    <script src="{{asset('js/flot/jquery.flot.js') }}"></script>
    <script src="{{asset('js/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{asset('js/flot/curvedLines.js') }}"></script>
    <script src="{{asset('js/flot/flot-active.js') }}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{asset('js/plugins.js') }}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{asset('js/main.js') }}"></script>
</body>

</html>