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
					<a href="#"><img src="static/dashboard/img/notification/4.jpg" alt="" /></a>
                    <h2>{{ Auth::user()->name }}</h2>
				</div>
                <div class="profile-dtl mt5 mb-5">

                    <a class="" href="{{ route('dashboard.index') }}">
                        <i class="bi bi-bag"></i> Dashboard</a>

				</div>


			</div>

            @yield('leftsidebarmenupro')

        </nav>
    </div>
    <!-- Start dashboard area -->


    <div class="all-content-wrapper mt-5" style="background: white">


        <div class="header-advance-area" style="background: white">
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

                                                {{-- <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="icon nalika-alarm" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn"> --}}
                                                        {{-- <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div> --}}
                                                        {{-- <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="icon nalika-tick" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="icon nalika-cloud" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="icon nalika-folder" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="icon nalika-bar-chart" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul> --}}
                                                        {{-- <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div> --}}
                                                    {{-- </div>
                                                </li> --}}
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">


                                                                 <li class="icon nalika-settings header-riht-inf" aria-hidden="true"> Settings</li>

															<i class="icon nalika-down-arrow nalika-angle-dw nalika-icon"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        @if (Auth::check())


                                                        <li>
                                                        <a  href="{{ route('logout') }}" class="icon nalika-unlocked author-log-ic"
                                                         onclick="event.preventDefault();
                                                                       document.getElementById('logout-form').submit();">
                                                          {{ __('Logout') }}
                                                      </a> </li>

                                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                          @csrf
                                                      </form>

                                                     @else
                                                         @if (Route::has('login'))
                                                         <li><a href="{{ route('users') }}">Login</a></li>

                                                         @if (Route::has('register'))
                                                         <li ><a href="{{ route('users') }}" >Signup</a></li>
                                                         @endif
                                                         @endif

                                                     @endif
                                                     @if (Route::has('register'))
                                                        <li><a href="{{ route('users.index') }}"><span class="icon nalika-home author-log-ic"></span> Register</a>
                                                            @endif
                                                        </li>

                                                        </li>
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



            <div class="breadcome-area mt-5"  >
                <div class="container-fluid mt-5">

                    <div class="row mt-5" >
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list mt-5" style="background:white">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="breadcome-area mt-5" style="background:white">
                <div class="container-fluid mt-5" style="background: white">

                    <div class="row mt-5" style="background: white">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: white">
                            <div class="breadcome-list mt-5" style="background:white;">
                                <div class="row mt-5" style="background: white">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-5 justify-content-center align-center" style="background: white">


                                            @yield('dashboardcontent')


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>






        {{-- <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
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

     <!-- Custom -->
        <!-- JS file -->
        <script src="{{ asset('static/js/bootstrap.min.js') }}"></script>



</body>

</html>
