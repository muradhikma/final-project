<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AG Restaurant Reservaion System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- favicon
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="static/dashboard/img/favicon.ico">
        <!-- Google Fonts
            ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('static/dashboard/css/bootstrap.min.css') }}">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('static/dashboard/css/font-awesome.min.css') }}">
        <!-- Nalik Icon Css-->
        <link rel="stylesheet" href="{{ asset('static/dashboard/css/nalika-icon.css') }}">
        <!-- owl.carousel CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('static/dashboard/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('static/dashboard/css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('static/dashboard/css/owl.transitions.css') }}">
        <!-- animate CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('static/dashboard/css/animate.css') }}">
        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('static/dashboard/css/normalize.css') }}">
        <!-- meanmenu icon CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('static/dashboard/css/meanmenu.min.css') }}">
        <!-- main CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('static/dashboard/css/main.css') }}">
        <!-- morrisjs CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('static/dashboard/css/morrisjs/morris.css') }}">
        <!-- mCustomScrollbar CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('static/dashboard/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
        <!-- metisMenu CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('static/dashboard/css/metisMenu/metisMenu.min.css') }}">
        <link rel="stylesheet" href="{{ asset('static/dashboard/css/metisMenu/metisMenu-vertical.css') }}">
        <!-- calendar CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('static/dashboard/css/calendar/fullcalendar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('static/dashboard/css/calendar/fullcalendar.print.min.css') }}">
        <!-- accordions CSS
             ============================================ -->
        <link rel="stylesheet" href="{{ asset('static/dashboard/css/accordions.css') }}">
        <!-- style CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('static/dashboard/style.css') }}">
        <!-- responsive CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('static/dashboard/css/responsive.css') }}">
        <!-- modernizr JS
            ============================================ -->
        <script src="{{ asset('static/dashboard/js/vendor/modernizr-2.8.3.min.js') }}"></script>

        <!-- Custom  css -->


            <!-- Next -->
            <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('static/dashboard/css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('static/dashboard/css/font-awesome.min.css') }}">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('static/dashboard/css/nalika-icon.css') }}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('static/dashboard/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('static/dashboard/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('static/dashboard/css/owl.transitions.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('static/dashboard/css/animate.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('static/dashboard/css/normalize.css') }}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('static/dashboard/css/meanmenu.min.css') }}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('static/dashboard/css/main.css') }}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('static/dashboard/css/morrisjs/morris.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('static/dashboard/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('static/dashboard/css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('static/dashboard/css/metisMenu/metisMenu-vertical.css') }}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('static/dashboard/css/calendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('static/dashboard/css/calendar/fullcalendar.print.min.css') }}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('static/dashboard/style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('static/dashboard/css/responsive.css') }}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('static/dashboard/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <!-- --->
    <link href="{{ asset('static/css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('static/js/main.js') }}"></script>



</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="left-sidebar-pro">
            <nav id="sidebar" class="">

                <div class="nalika-profile">
                    <div class="profile-dtl">
                     <h2 class="text-light text-center">AG Restaurant Reservaion System </h2>
                 </div>
                    <div class="profile-dtl">
                        <a href="#"><img src="static/dashboard/img/notification/4.jpg" alt="" /></a>
                        <h2>{{ Auth::user()->name }}</h2>
                    </div>
                    <div class="profile-dtl mt5 mb-5">
                        <hr>

                        <a class="" href="{{ route('dashboard.index') }}">
                            <i class="bi bi-bag"></i> Dashboard</a>

                    </div>

                    <div class="profile-dtl mt5 mb-5">
                        <hr>

                        <a class="" href="{{ route('home') }}">
                            <i class="bi bi-bag"></i> Home </a>
                            <hr>

                    </div>

                </div>
                <div class="left-custom-menu-adp-wrap comment-scrollbar">
                    <nav class="sidebar-nav left-sidebar-menu-pro">
                        <ul class="metismenu" id="menu1">
                            <li class="active">





                                <ul class="submenu-angle mt-3" aria-expanded="true">


                                    @canany(['create-role', 'edit-role', 'delete-role'])
                                    <a class="" href="{{ route('roles.index') }}">
                                      <i class="mini-click-non"></i> Manage Roles</a>
                                @endcanany




                                     @canany(['create-user', 'edit-user', 'delete-user'])
                                     <a class=" " href="{{ route('users.index') }}">
                                         <i class="bi bi-people"></i> Manage Users</a>
                                 @endcanany



                                 @canany(['create-food', 'edit-food', 'delete-food'])
                                 <a class="" href="{{ route('food.index') }}">
                                     <i class="bi bi-bag"></i> Manage Food and food Item</a>
                             @endcanany
                             @canany(['create-table', 'edit-table', 'delete-table'])
                             <a class="" href="{{ route('table.index') }}">
                                 <i class="bi bi-bag"></i> Manage Table</a>
                         @endcanany
                         {{-- @canany(['create-payment', 'edit-payment', 'delete-payment'])
                         <a class="" href="{{ route('payment.index') }}">
                             <i class="bi bi-bag"></i>Manage Payment</a>
                     @endcanany --}}
                             @canany(['create-waitlist', 'edit-waitlist', 'delete-waitlist'])
                             <a class="" href="{{ route('waitlist.index') }}">
                                 <i class="bi bi-bag"></i> Manage Waitlist</a>
                         @endcanany

                         @canany(['create-reservation', 'edit-reservation', 'delete-reservation'])
                         <a class="" href="{{ route('reservation.index') }}">
                             <i class="bi bi-bag"></i> Manage Reservation</a>
                     @endcanany
                                </ul>
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
                        <a href="index.html"><img class="main-logo" src="static/dashboard/img/logo/logo.png" alt="" /></a>
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
                                        <div class="header-top-menu tabl-d-n">
                                            <div class="breadcome-heading">
												{{-- <form role="search" class="">
													<input type="text" placeholder="Search..." class="form-control">
													<a href=""><i class="fa fa-search"></i></a>
												</form> --}}
											</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">

                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                    <!--<i class="icon nalika-alarm" aria-hidden="true"></i>-->
                                                        <span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">


                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<i class="icon nalika-settings author-log-ic" aria-hidden="true"> Settings</i>

															<i class="icon nalika-down-arrow nalika-angle-dw nalika-icon"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        @if (Auth::check())
                                                     @if (Route::has('register'))
                                                        <li><a href="{{ route('users.index') }}"><span class="icon nalika-home author-log-ic"></span> Register</a>
                                                            @endif
                                                        </li>



                                                        <li><a href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();

                                                            document.getElementById('logout-form').submit();">
                                                             {{ __('Logout') }}<span class="icon nalika-unlocked author-log-ic"></span> <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                @csrf
                                                            </form></a>

                                                        </li>
                                                        @endif
                                                    </ul>
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
            <div class="mobile-menu-area" >
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">

                                        <ul class="submenu-angle mt-3" aria-expanded="true">

                                            <i class="mini-click-non"></i> Manage Roles</a>
                                            @canany(['create-role', 'edit-role', 'delete-role'])
                                            <a class="" href="{{ route('roles.index') }}">
                                              <i class="mini-click-non"></i> Manage Roles</a>
                                        @endcanany




                                             @canany(['create-user', 'edit-user', 'delete-user'])
                                             <a class=" " href="{{ route('users.index') }}">
                                                 <i class="bi bi-people"></i> Manage Users</a>
                                         @endcanany




                                        </ul>






                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area" style="margin-top: 1px; "  >
                <div class="container-fluid">
                    <div class="row d-flex justify-center col-8 align-center m-5">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            {{-- <div class="breadcome-list" >
                                {{-- <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
											<div class="breadcomb-icon">
												<i class="icon nalika-home"></i>
											</div>
											<div class="breadcomb-ctn">
												<h2>Dashboard Three</h2>
												<p>Welcome {{ Auth::user()->name }} to <span class="bread-ntd">Dashboard</span></p>
											</div>
										</div>
                                    </div> --}}
                                   {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-report">
											<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
										</div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--
        <div class="section-admin container-fluid m-5"  style="margin-top: 40px; " >

            <div class="row admin text-center col-8 m-5 d-flex justify-center align-center"  >
                <div class="col-8 m-5">

                    <div class="row d-flex justify-center align-center m-5">
                        <div class="col-lg-3 col-md-3 col-sm-10 col-xs-12 ">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-15">
                                <h4 class="text-left text-uppercase"><b>Total Room Was Reserved</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="col-xs-3 mar-bot-15 text-left">
                                        <label class="label bg-green">30% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">{{-- $total--}}</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 78%;" class="progress-bar bg-green"></div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Total Number of Check in and Check out</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-red">15% <i class="fa fa-level-down" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">{{--$checkinandcheckout--}}</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 38%;" class="progress-bar progress-bar-danger bg-red"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Total Number of User</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-blue">50% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">{{-- $user --}}</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 60%;" class="progress-bar bg-blue"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Tottal Number of Event Booking</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-blue">50% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">{{-- $user--}}</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 60%;" class="progress-bar bg-blue"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Tottal Number of Feed back</b></h4>
                                <div class="row vertical-center-box vertical-center-box-tablet">
                                    <div class="text-left col-xs-3 mar-bot-15">
                                        <label class="label bg-blue">50% <i class="fa fa-level-up" aria-hidden="true"></i></label>
                                    </div>
                                    <div class="col-xs-9 cus-gh-hd-pro">
                                        <h2 class="text-right no-margin">{{-- $feedback --}}</h2>
                                    </div>
                                </div>
                                <div class="progress progress-mini">
                                    <div style="width: 60%;" class="progress-bar bg-blue"></div>
                                </div>
                            </div>
                        </div>



            </div>
              -->
        </div>





        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- jquery
		============================================ -->
        <script src="{{ asset('static/dashboard/js/vendor/jquery-1.11.3.min.js') }}"></script>
        <!-- bootstrap JS
            ============================================ -->
        <script src="{{ asset('static/dashboard/js/bootstrap.min.js') }}"></script>
        <!-- wow JS
            ============================================ -->
        <script src="{{ asset('static/dashboard/js/wow.min.js') }}"></script>
        <!-- price-slider JS
            ============================================ -->
        <script src="{{ asset('static/dashboard/js/jquery-price-slider.js') }}"></script>
        <!-- meanmenu JS
            ============================================ -->
        <script src="{{ asset('static/dashboard/js/jquery.meanmenu.js') }}"></script>
        <!-- owl.carousel JS
            ============================================ -->
        <script src="{{ asset('static/dashboard/js/owl.carousel.min.js') }}"></script>
        <!-- sticky JS
            ============================================ -->
        <script src="{{ asset('static/dashboard/js/jquery.sticky.js') }}"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="{{ asset('static/dashboard/js/jquery.scrollUp.min.js') }}"></script>
        <!-- mCustomScrollbar JS
            ============================================ -->
        <script src="{{ asset('static/dashboard/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ asset('static/dashboard/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
        <!-- counterup JS
            ============================================ -->
        <script src="{{ asset('static/dashboard/js/counterup/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('static/dashboard/js/counterup/waypoints.min.js') }}"></script>
        <script src="{{ asset('static/dashboard/js/counterup/counterup-active.js') }}"></script>
        <!-- metisMenu JS
            ============================================ -->
        <script src="{{ asset('static/dashboard/js/metisMenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('static/dashboard/js/metisMenu/metisMenu-active.js') }}"></script>
        <!-- morrisjs JS
            ============================================ -->
        <script src="{{ asset('static/dashboard/js/sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('static/dashboard/js/sparkline/jquery.charts-sparkline.js') }}"></script>
        <!-- calendar JS
            ============================================ -->
        <script src="{{ asset('static/dashboard/js/calendar/moment.min.js') }}"></script>
        <script src="{{ asset('static/dashboard/js/calendar/fullcalendar.min.js') }}"></script>
        <script src="{{ asset('static/dashboard/js/calendar/fullcalendar-active.js') }}"></script>
        <!-- Float JS-->
        <script src="{{ asset('static/dashboard/js/flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('static/dashboard/js/flot/jquery.flot.resize.js') }}"></script>
        <script src="{{ asset('static/dashboard/js/flot/jquery.flot.pie.js') }}"></script>
        <script src="{{ asset('static/dashboard/js/flot/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ asset('static/dashboard/js/flot/jquery.flot.orderBars.js') }}"></script>
        <script src="{{ asset('static/dashboard/js/flot/curvedLines.js') }}"></script>
        <script src="{{ asset('static/dashboard/js/flot/flot-active.js') }}"></script>
        <div class="'flot-tooltip"></div>
        <div class="'flot-tooltip"></div>
        <div class="'flot-tooltip"></div>
<!--plugins.js-->
        <script src="{{ asset('static/dashboard/js/plugins.js') }}"></script>
<!--Main.js-->
        <script src="{{ asset('static/dashboard/js/main.js') }}"></script>



        <!-- tab JS
            ============================================ -->
        <script src="{{ asset('static/dashboard/js/tab.js') }}"></script>
        <!-- plugins JS
            ============================================ -->
        <script src="{{ asset('static/dashboard/js/plugins.js') }}"></script>
        <!-- main JS
            ============================================ -->
        <script src="{{ asset('static/dashboard/js/main.js') }}"></script>

        <!-- Custom -->
        <!-- JS file -->
        <script src="{{ asset('static/js/bootstrap.min.js') }}"></script>

        <!-- Next -->

         <!-- jquery
		============================================ -->
    <script src="{{ asset('static/dashboard/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('static/dashboard/js/bootstrap.min.js') }}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ asset('static/dashboard/js/wow.min.js') }}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ asset('static/dashboard/js/jquery-price-slider.js') }}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('static/dashboard/js/jquery.meanmenu.js') }}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ asset('static/dashboard/js/owl.carousel.min.js') }}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{ asset('static/dashboard/js/jquery.sticky.js') }}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('static/dashboard/js/jquery.scrollUp.min.js') }}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset('static/dashboard/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('static/dashboard/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{ asset('static/dashboard/js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('static/dashboard/js/metisMenu/metisMenu-active.js') }}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{ asset('static/dashboard/js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('static/dashboard/js/sparkline/jquery.charts-sparkline.js') }}"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{{ asset('static/dashboard/js/calendar/moment.min.js') }}"></script>
    <script src="{{ asset('static/dashboard/js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('static/dashboard/js/calendar/fullcalendar-active.js') }}"></script>
	<!-- float JS
		============================================ -->
    <script src="{{ asset('static/dashboard/js/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('static/dashboard/js/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('static/dashboard/js/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('static/dashboard/js/flot/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('static/dashboard/js/flot/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('static/dashboard/js/flot/curvedLines.js') }}"></script>
    <script src="{{ asset('static/dashboard/js/flot/flot-active.js') }}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('static/dashboard/js/plugins.js') }}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('static/dashboard/js/main.js') }}"></script>



</body>

</html>
