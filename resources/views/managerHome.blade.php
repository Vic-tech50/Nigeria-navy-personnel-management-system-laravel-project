<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard V.1 | Nalika - Material Admin Template</title>
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
    <link rel="stylesheet" href = "{{asset('w3/w32.css') }}">

<!-- datatable -->

    <link rel="stylesheet" href = "{{asset('datatables/dataTables.bootstrap4.css') }}">
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
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href = "{{asset('css/responsive.css') }}">
    <!-- modernizr JS
        ============================================ -->
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <script src="{{asset('jsx/tinymce/tinymce.min.js') }}"></script>
</head>
<body>
    <div class="color-line"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                <div class="content-error" style="margin-top: 200px;">
                    <h1>You Have No Access Again! <span class="counter"> {{Auth::user()->employeeId}}</span></h1>
                    <!-- <p>The server encountered something unexpected that didn't allow it to complete the request. We apologize.</p> -->
                       <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="icon-key"></i> <span>Go to Homepage</span> 
                                    </a> 

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                      
                                    </form>
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
        </div>
      
        </div>
    </div>


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


    <!-- datatable -->
    <script src="{{asset('datatables/jquery.dataTables.js') }}"></script>
    <script src="{{asset('datatables/jquery.bootstrap4.js') }}"></script>
    <script src="{{asset('datatables/jquery.bootstrap4.min.js') }}"></script>




</body>

</html>


