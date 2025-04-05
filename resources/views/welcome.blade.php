<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>AG Restaurant Reservaion System</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('static/resfile/images/ethiofood/kitfo.jpg') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('static/resfile/images/ethiofood/kitfo.jpg') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('static/resfile/css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('static/resfile/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('static/resfile/css/responsive.css')}}">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="{{ asset('static/resfile/css/colors/orange.css')}}" />

    <!-- Modernizer -->
    <script src="{{ asset('static/resfile/js/modernizer.js')}}"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <h1 class="navbar-brand js-scroll-trigger logo-header">AG Restaurant Reservaion System</h1>
                                   <!-- <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                        <img src="{{ asset('static/resfile/images/logo.png')}}" alt="">
                                    </a>-->
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">

                                    <li class="active"><a href="#banner">Home</a></li>

                                    <li><a href="#menu">Menu</a></li>


                                    <li><a href="#reservation">Reservaion</a></li>
                                   <!-- <li><a href="signup.html">Signup</a></li>-->
                                   @if (Auth::check())

                                   <li>
                                    @if (Auth::user()->hasRole('Admin') or Auth::user()->hasRole('Receptionist') or Auth::user()->hasRole('Cashier') or Auth::user()->hasRole('Cooker') )
                                    <a class="" href="{{ route('dashboard.index') }}">
                                    <i class="bi bi-bag"></i> Dashboard</a>
                                  @endif
                                </li>
                                   <li>




                                   <a  href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                 </a> </li>

                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                     @csrf
                                 </form>
                                 @endif
                                </ul>
                            </div>
                            <!-- end nav-collapse -->
                        </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
	<!-- end site-header -->

    <div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h1>Dinner with us  <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Friends:Family:Officemates" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
                            <h2>AG Restaurant </h2>
                            <p></p>
                            <div class="book-btn">

                                <a href="#reservation" class="table-btn hvr-underline-from-center">
                                    <span class="text-success">{{  $message }}</span><br> Book my Table</a>
                            </div>
                            <a href="#about">
                                <div class="mouse"></div>
                            </a>
                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->



    <div class="special-menu pad-top-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title color-white text-center">  </h2>
                        <h5 class="title-caption text-center">  </h5>
                    </div>
                    <div class="special-box">
                        <div id="owl-demo">
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">

                                            <div class="line"></div>
                                            <div class="dit-line"></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img class="img-fluid" src="{{ asset('static/resfile/images/home1.jpg' )}}" alt="sp-menu" style="height: 400px;">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">

                                            <div class="line"></div>
                                            <div class="dit-line"></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img  class="img-fluid"  src="{{ asset('static/resfile/images/home3.jpg' )}}" alt="sp-menu" style="height: 400px;">
                                </div>
                            </div>


                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">

                                            <div class="line"></div>
                                            <div class="dit-line"></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img class="img-fluid"  src="{{ asset('static/resfile/images/home4.jpg' )}}" alt="sp-menu" style="height: 400px;">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">

                                            <div class="line"></div>
                                            <div class="dit-line"></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img  class="img-fluid"  src="{{ asset('static/resfile/images/home5.jpg' )}}" alt="sp-menu" style="height: 400px;">
                                </div>
                            </div>
                            <div class="item item-type-zoom">
                                <a href="#" class="item-hover">
                                    <div class="item-info">
                                        <div class="headline">

                                            <div class="line"></div>
                                            <div class="dit-line"></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="item-img">
                                    <img class="img-fluid"  src="{{ asset('static/resfile/images/home6.jpg' )}}" alt="sp-menu" style="height: 400px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end special-box -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end special-menu -->

    <div id="menu" class="menu-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						Our Menu
					</h2>
                        <p class="title-caption text-center"></p>
                    </div>
                    <div class="tab-menu">
                        <div class="slider slider-nav">
                            <div class="tab-title-menu">
                                <h2>STARTERS</h2>
                                <p> <i class="flaticon-canape"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>MAIN DISHES</h2>
                                <p> <i class="flaticon-dinner"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>DESERTS</h2>
                                <p> <i class="flaticon-desert"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>DRINKS</h2>
                                <p> <i class="flaticon-coffee"></i> </p>
                            </div>
                        </div>
                        <div class="slider slider-single">
                            <div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="{{ asset('static/resfile/images/menu-item-thumbnail-01.jpg' )}}" alt="" class="img-responsive">
                                        <div>
                                            <h3>GARLIC BREAD</h3>
                                            <p>

                                            </p>
                                        </div>
                                        <span class="offer-price">80 birr</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="{{ asset('static/resfile/images/menu-item-thumbnail-02.jpg' )}}" alt="" class="img-responsive">
                                        <div>
                                            <h3>MIXED SALAD</h3>
                                            <p>

                                            </p>
                                        </div>
                                        <span class="offer-price">80 birr</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="{{ asset('static/resfile/images/menu-item-thumbnail-03.jpg' )}}" alt="" class="img-responsive">
                                        <div>
                                            <h3>BBQ CHICKEN WINGS</h3>
                                            <p>

                                            </p>
                                        </div>
                                        <span class="offer-price">80 birr</span>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="{{ asset('static/resfile/images/menu-item-thumbnail-04.jpg' )}}" alt="" class="img-responsive">
                                        <div>
                                            <h3>MEAT FEAST PIZZA</h3>
                                            <p>

                                            </p>
                                        </div>
                                        <span class="offer-price">80 birr</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="{{ asset('static/resfile/images/menu-item-thumbnail-05.jpg') }}" alt="" class="img-responsive">
                                        <div>
                                            <h3>CHICKEN TIKKA MASALA</h3>
                                            <p>

                                            </p>
                                        </div>
                                        <span class="offer-price">80 birr</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="{{ asset('static/resfile/images/menu-item-thumbnail-06.jpg' )}}" alt="" class="img-responsive">
                                        <div>
                                            <h3>SPICY MEATBALLS</h3>
                                            <p>

                                            </p>
                                        </div>
                                        <span class="offer-price">80 birr</span>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="{{ asset('static/resfile/images/menu-item-thumbnail-07.jpg' )}}" alt="" class="img-responsive">
                                        <div>
                                            <h3>CHOCOLATE FUDGECAKE</h3>
                                            <p>

                                            </p>
                                        </div>
                                        <span class="offer-price">80 birr</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="{{ asset('static/resfile/images/menu-item-thumbnail-08.jpg' )}}" alt="" class="img-responsive">
                                        <div>
                                            <h3>CHICKEN TIKKA MASALA</h3>
                                            <p>

                                            </p>
                                        </div>
                                        <span class="offer-price">80 birr</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="{{ asset('static/resfile/images/menu-item-thumbnail-09.jpg' )}}" alt="" class="img-responsive">
                                        <div>
                                            <h3>CHICKEN TIKKA MASALA</h3>
                                            <p>

                                            </p>
                                        </div>
                                        <span class="offer-price">80 birr</span>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                            <div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="{{ asset('static/resfile/images/menu-item-thumbnail-10.jpg' )}}" alt="" class="img-responsive">
                                        <div>
                                            <h3>MEAT FEAST PIZZA</h3>
                                            <p>

                                            </p>
                                        </div>
                                        <span class="offer-price">80 birr</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="{{ asset('static/resfile/images/menu-item-thumbnail-09.jpg' )}}" alt="" class="img-responsive">
                                        <div>
                                            <h3>CHICKEN TIKKA MASALA</h3>
                                            <p>

                                            </p>
                                        </div>
                                        <span class="offer-price">80 birr</span>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                    <div class="offer-item">
                                        <img src="{{ asset('static/resfile/images/menu-item-thumbnail-08.jpg' )}}" alt="" class="img-responsive">
                                        <div>
                                            <h3>CHICKEN TIKKA MASALA</h3>
                                            <p>

                                            </p>
                                        </div>
                                        <span class="offer-price">80 birr</span>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                        </div>
                    </div>
                    <!-- end tab-menu -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end menu -->








    <div id="reservation" class="reservations-main pad-top-100 pad-bottom-100 mb-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="form-reservations-box">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="block-title text-center">
						Reservations
                        <p class="text-info">{{  $message }}</p>
					</h2>
                        </div>
                        <h4 class="form-title">BOOKING FORM</h4>
                        <p>PLEASE FILL OUT ALL REQUIRED* FIELDS. THANKS!</p>

                        <form action="{{ route('cutomer.store') }}" method="post" >
                            @csrf

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="firstname" id="firstname" placeholder="First Name" required="required" data-error="Firstname is required.">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="lastname" id="lastname" placeholder="Last Name" required="required" data-error="Last is required.">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="phone" id="phone" placeholder="contact no.">
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <select name="noofpersons" id="noofpersons" class="selectpicker">
                                        <option selected disabled>No. Of persons</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="date" id="date-picker" placeholder="Date" required="required" data-error="Date is required." />
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="time" id="time-picker" placeholder="Time" required="required" data-error="Time is required." />
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">


                                            <select name="preferredfood" id="preferredfood" >
                                                <option value="0" selected >Without  food</option>
                                                <option value="1">With Food</option>

                                            </select>


                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <select name="payment" id="payment" class="selectpicker">
                                        <option selected disabled>Payment By</option>
                                        <option>Cash</option>
                                        <option>Mobile Banking</option>

                                    </select>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-5">
                                <div class="reserve-book-btn text-center mb-5">
                                    <button class="hvr-underline-from-center" type="submit"  >BOOK MY TABLE </button>
                                </div>
                            </div>

                            <!-- end col -->
                        </form>
                        <!-- end form -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end reservations-box -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end reservations-main -->
    <div class="container col-12 justify-content-center align-content-center" style="height: 200px;">
<hr>
            <h1> Contact </h1>
            <div class="row d-flex  justify-content-center align-content-center ">
                <div class="col-7 text-start">
                 <h5> Email : <b class="">ag@caffe.com</b></h5>
                 <h5> Call :+2519464744848</h5>

                </div>




        </div>
    </div>

    <div id="footer" class="footer-main mt-5" style="height: 200px;">
        <div class="footer-news pad-top-100 pad-bottom-70 parallax">
            <div class="container">
                <div class="row">

                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end footer-news -->
        <div class="footer-box pad-top-70" >
            <div class="container">
                <div class="row">
                    <div class="footer-in-main">
                        <div class="footer-logo">

                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                            <!-- end footer-box-a -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                            <!-- end footer-box-b -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
Desgin and Developed by Group Memeber
                            <!-- end footer-box-c -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
 <i class="fa fa-copyright" aria-hidden="true"> Group Memeber</i>
                            <!-- end footer-box-d -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end footer-in-main -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->

            <!-- end copyright-main -->
        </div>
        <!-- end footer-box -->
    </div>
    <!-- end footer-main -->

    <a href="#" class="scrollup" style="display: none;">Scroll</a>



    <!-- ALL JS FILES -->
    <script src="{{ asset('static/resfile/js/all.js' )}}"></script>
    <script src="{{ asset('static/resfile/js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('static/resfile/js/custom.js')}}"></script>
</body>

</html>
