<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Personnel Dashboard</title>
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
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="/home"></a>
                <strong><img src="img/{{Auth::user()->image}}" alt="" /></strong>
            </div>
			<div class="nalika-profile">
				<div class="profile-dtl">
					<a href="#"><img src="uploads/{{Auth::user()->image}}" alt="" /></a><br><br>
                    <h2>{{Auth::user()->name}} </h2>
					<p style="line-height: 0px ;">{{Auth::user()->employeeId}} </p>
				</div>
			
			</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                       
                       
                        <li>
                            <a class="" href="/home" aria-expanded="false"><i class="fa fa-tachometer"></i> <span class="mini-click-non">Dashboard</span></a>
                          
                        </li>


                        <li>
                            <a class="" href="/take_a_leave" aria-expanded="false"><i class="fa fa-paper-plane-o fa-lg"></i> <span class="mini-click-non">Take a leave</span></a>
                           
                        </li>


                        <li>
                            <a class="" href="/history" aria-expanded="false"><i class="fa fa-history fa-lg"></i> <span class="mini-click-non">History</span></a>
                           
                        </li>

                         <li>
                            <a class="" href="/submit_assignment" aria-expanded="false"><i class="fa fa-bell-o fa-lg"></i> <span class="mini-click-non">Submit Assignment</span></a>
                           
                        </li>

                         <li>
                            <a class="" href="/user_profile" aria-expanded="false"><i class="fa fa-user fa-lg"></i> <span class="mini-click-non">Profile</span></a>
                           
                        </li>


                        
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="icon nalika-menu-task"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n hd-search-rp">
                                            <div class="breadcome-heading">
												
											</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                  
                                                  
                                                </li>
                                             
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<i class="fa fa-user"></i>
															<span class="admin-name">{{ Auth::user()->name }}</span>
															<i class="icon nalika-down-arrow nalika-angle-dw"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="/take_a_leave"><span class="icon nalika-home author-log-ic"></span> Take a Leave</a>
                                                        </li>
                                                        <li><a href="/user_profile"><span class="icon nalika-user author-log-ic"></span> My Profile</a>
                                                        </li>
                                                       
                                                        <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a>

                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-menu-task"></i></a>

                                                  
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="/home">Home <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                           
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="/take_a_leave">Take A Leave <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                           
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#others" href="/history">History <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                          
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="/submit_assignment">Report <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                         
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="/user_profile">Profile <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                           
                                        </li>
                                      
                                     
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
          @yield('content')

              <!-- <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

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


    <!-- datatable -->
    <script src="{{asset('datatables/jquery.dataTables.js') }}"></script>
    <script src="{{asset('datatables/jquery.bootstrap4.js') }}"></script>
    <script src="{{asset('datatables/jquery.bootstrap4.min.js') }}"></script>



    <script>
    $(document).ready(function(){
        $('#tab').DataTable();
    });
</script>


</body>

</html>