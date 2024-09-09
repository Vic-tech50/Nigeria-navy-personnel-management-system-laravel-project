<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Dashboard</title>
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
            <div class="sidebar-header"><br>
                <a href="/admin/home"><img src="{{asset('logo.svg') }}" alt="" style="width: 80px; height: 80px;" /></a>
                <strong><img src="logo.svg" alt="" /></strong>
            </div>
			<div class="nalika-profile">
				<div class="profile-dtl">
					<a href="#"><img src="{{ asset('img/admin.jpg') }}" alt="admin"  width="100"  height="100" /></a><br><br> 
					<h3>{{ Auth::user()->name }}</h3>
                    <h2>Administrator</h2>
                    
				</div>
				<div class="profile-social-dtl">
					<ul class="dtl-social">
						<li><a href="#"><i class="icon nalika-facebook"></i></a></li>
						<li><a href="#"><i class="icon nalika-twitter"></i></a></li>
						<li><a href="#"><i class="icon nalika-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                         <li>
                            <a class="" href="/admin/home" aria-expanded="false"><i class="fa fa-tachometer"></i> <span class="mini-click-non">Dashboard</span></a>
                          
                        </li>

                        <li class="active">
                            <a class="has-arrow" href="index.html">
								   <i class="fa fa-home fa-lg"></i>
								   <span class="mini-click-non">Personnel</span>
								</a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a  href="{{route('employee.create')}}"><span class="mini-sub-pro">Add Personnel</span></a></li>
                                <li><a  href="{{route('employee.index')}}"><span class="mini-sub-pro">View Personnel</span></a></li>
                                <li><a  href="/sacked_employee"><span class="mini-sub-pro">AWOL/Desertion</span></a></li>
                                <!-- <li><a  href="index-1.html"><span class="mini-sub-pro">Retired Personnel</span></a></li> -->

                                 <li><a  href="/on_leave"><span class="mini-sub-pro">Personnel On Leave</span></a></li>
                               
                            </ul>
                        </li>
                       
                        <li>
                            <a class="" href="/message" aria-expanded="false"><i class="fa fa-comments"></i> <span class="mini-click-non">Send Notice</span></a>
                          
                        </li>


                        <li>
                            <a class="" href="{{route('payroll.index')}}" aria-expanded="false"><i class="fa fa-money fa-lg"></i> <span class="mini-click-non">Payroll</span></a>
                           
                        </li>


                        <li>
                            <a class="" href="/newsletter" aria-expanded="false"><i class="fa fa-envelope-o fa-lg"></i> <span class="mini-click-non">Newsletter</span></a>
                           
                        </li>

                         <li>
                            <a class="" href="/assignment" aria-expanded="false"><i class="fa fa-bell-o fa-lg"></i> <span class="mini-click-non">Special Order</span></a>
                           
                        </li>

                         <li>
                            <a class="" href="/settings" aria-expanded="false"><i class="fa fa-cogs fa-lg"></i> <span class="mini-click-non">Settiings</span></a>
                           
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
												<form action = "/search" method="GET">
                                                    <div class="row">
                                                        <div class="col-lg-2">
													<input type="text" placeholder="Search Personnel" style="color: white" class="form-control" name="query"   value = "{{old('query')}}">
                                                </div>
                                                <div class="col-lg-2">
													<button class="btn" type="submit"><i class="fa fa-search"></i></button>
                                                </div>
                                                </div>
												</form>
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
                                                        <li><a href="register.html"><span class="icon nalika-home author-log-ic"></span> Register</a>
                                                        </li>
                                                        <li><a href="#"><span class="icon nalika-user author-log-ic"></span> My Profile</a>
                                                        </li>
                                                        <li><a href="lock.html"><span class="icon nalika-diamond author-log-ic"></span> Lock</a>
                                                        </li>
                                                        <li><a href="#"><span class="icon nalika-settings author-log-ic"></span> Settings</a>
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

                                                    <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                        <ul class="nav nav-tabs custon-set-tab">
                                                            <li class="active"><a data-toggle="tab" href="#Notes">News</a>
                                                            </li>
                                                            <li><a data-toggle="tab" href="#Projects">Activity</a>
                                                            </li>
                                                            <li><a data-toggle="tab" href="#Settings">Settings</a>
                                                            </li>
                                                        </ul>

                                                    </div>
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
                                        <li><a data-toggle="collapse" data-target="#Charts" href="/admin/home">Dashboard</a>
                                            
                                        </li>

                                         <li><a data-toggle="collapse" data-target="#Charts" href="#">Employee <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                
                                                <li><a href="{{route('employee.create')}}">Add Employee</a></li>
                                                <li><a href="{{route('employee.index')}}">View Employee</a></li>
                                                <li><a href="/sacked_employee">Sacked Employees</a></li>
                                                <li><a href="product-edit.html">Retired Employee</a></li>
                                                <li><a href="/on_leave">Employee On Leave</a></li>
                                              
                                            </ul>
                                        </li>

                                        <li><a data-toggle="collapse" data-target="#demo" href="/message">Send Notice </a>
                                           
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#others" href="/payroll">Payroll </a>
                                           
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="/newsletter">Newsletter</a>
                                          
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Notification </a>
                                           
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="/settings">Settings </a>
                                          
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
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->

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