
{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: hangzhou--}}
 {{--* Date: 2017-08-22--}}
 {{--* Time: 9:35 AM--}}
 {{--*/--}}

{{--/**--}}
{{--* Created by PhpStorm.--}}
{{--* User: hangzhou--}}
{{--* Date: 2017-08-20--}}
{{--* Time: 7:32 PM--}}
{{--*/--}}

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Rating</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="{{ asset('css/img/icons/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('css/img/icons/114x114.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('css/img/icons/72x72.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('css/img/icons/default.png') }}">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('css/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('css/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/owlcarousel/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/owlcarousel/owl.theme.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/owlcarousel/owl.transitions.min.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('css/css/style.css') }}" rel="stylesheet">

    <!--Your custom colour override - predefined colours are: colour-blue.css, colour-green.css, colour-lavander.css, orange is default-->
    <link href="#" id="colour-scheme" rel="stylesheet">

    <!-- =======================================================
      Theme Name: Flexor
      Theme URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="page-index has-hero">
<div id="background-wrapper" class="buildings" data-stellar-background-ratio="0.1">

<!-- ======== @Region: #navigation ======== -->
    <div id="navigation" class="wrapper">
        <!--Hidden Header Region-->
        <div class="header-hidden collapse">
            <div class="header-hidden-inner container">
                <div class="row">
                    <div class="col-md-3">
                        <h3>
                            About Us
                        </h3>
                        <p>We are front-end designer team 8 from mac699. <br>Team member: Hang Zhou, Shengxi Zhang</p>
                        <a href="about.html" class="btn btn-more"><i class="fa fa-plus"></i> Learn more</a>
                    </div>
                    <div class="col-md-3">
                        <h3>
                            Contact Us
                        </h3>
                        <address>
                            <strong>University of Windsor</strong>
                            <abbr title="Address"><i class="fa fa-pushpin"></i></abbr>
                            401 Sunset Ave, Windsor, ON, N9B 3P4
                            <br>
                            <abbr title="Phone"><i class="fa fa-phone"></i></abbr>
                            (519)253-3000
                            <br>
                            <abbr title="Email"><i class="fa fa-envelope-alt"></i></abbr>
                            zhou167@uwindsor.ca
                        </address>
                    </div>
                    <div class="col-md-6">
                        <h3>
                            Theme Settings
                        </h3>
                        <div class="switcher">
                            <div class="cols">
                                Backgrounds:
                                <br>
                                <a href="#buildings" class="background buildings " title="Buildings">Buildings</a>
                            </div>
                            <div class="cols">
                                Colours:
                                <br>
                                <a href="#orange" class="colour orange active" title="Orange">Orange</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Header & navbar-branding region-->
        <div class="header">
            <div class="header-inner container">
                <div class="row">
                    <div class="col-md-8">
                        <!--navbar-branding/logo - hidden image tag & site name so things like Facebook to pick up, actual logo set via CSS for flexibility -->
                        <a class="navbar-brand" href="url{{'rating'}}" title="Home">
                            <h1 class="hidden">
                                <img src="/rating/public/img/logo.png" alt="Rating Logo">
                                RATING
                            </h1>
                        </a>
                        <div class="navbar-slogan">
                            Developed by Team 8
                            <br>
                            Front-end web designer
                        </div>
                    </div>
                    <!--header rightside-->
                    <div class="col-md-4">
                        <!--user menu-->
                        <ul class="list-inline user-menu pull-right">
                            @if (Auth::guest())
                                <li class="hidden-xs">
                                    <i class="fa fa-edit text-primary"></i>
                                    <a href="{{ route('register') }}" class="text-uppercase">Register</a>
                                </li>
                                <li class="hidden-xs">
                                    <i class="fa fa-sign-in text-primary"></i>
                                    <a href="{{ route('login') }}" class="text-uppercase">Login</a>
                                </li>
                            @else
                                <li class="hidden-xs">
                                    <i class="fa fa-edit text-primary"></i>
                                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                                    <a href="#" class="text-uppercase" >
                                        {{ Auth::user()->email }}
                                        {{--<span class="caret"></span>--}}
                                        {{--<b class="caret"></b>--}}
                                    </a>
                                </li>
                                {{--<ul class="dropdown-menu" >--}}
                                <li class="hidden-xs">
                                    <i class="fa fa-edit text-primary"></i>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"
                                       class="text-uppercase">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                                {{--</ul>--}}
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="navbar navbar-default">
                <!--mobile collapse menu button-->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <!--social media icons-->
                <div class="navbar-text social-media social-media-inline pull-right">
                <!--@todo: replace with company social media details-->
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
                <!--everything within this div is collapsed on mobile-->
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav" id="main-menu">
                        <li class="icon-link">
                            <a href="url{{'rating'}}"><i class="fa fa-home"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Rating<b class="caret"></b></a>
                            <!-- Dropdown Menu -->
                            <ul class="dropdown-menu">
                                <li class="dropdown-header">Select Category</li>
                                <li><a href="#" tabindex="-1" class="menu-item">Player Rating</a></li>
                                <li><a href="#" tabindex="-1" class="menu-item">Team Rating</a></li>

                                <!--                    <li class="dropdown-footer">Dropdown footer</li>-->
                            </ul>
                        </li>
                        <li><a href="{{url('playerList')}}">Rate Players</a></li>
                        <li><a href="{{url('teamList')}}">Rate Teams</a></li>
                        <li class="dropdown dropdown-mm">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                            <!-- Dropdown Menu -->
                            <ul class="dropdown-menu dropdown-menu-mm dropdown-menu-persist">
                                <li class="row">
                                    <ul class="col-md-6">
                                        <li><a href="#">Team</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.navbar-collapse -->
        </div>
    </div>
</div>

    <div class="hero" id="highlighted">
        <div class="inner">
            <!--Slideshow-->
            <div id="highlighted-slider" class="container">
                <div class="item-slider" data-toggle="owlcarousel" data-owlcarousel-settings='{"singleItem":true, "navigation":true, "transitionStyle":"fadeUp"}'>
                    <!--Slideshow content-->
                    <!--Slide 1-->
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6 col-md-push-6 item-caption">
                                <h2 class="h1 text-weight-light">
                                    Welcome to <span class="text-primary">Rating</span>
                                </h2>
                                <h4>
                                    To know and rate your favorite soccer player!
                                </h4>
                                <p>The best website of rating soccer players. You will get ideas how do others think about your favorite player.</p>
                                <a href="url{{'playerList'}}" class="btn btn-more btn-lg i-right">Learn Now <i class="fa fa-plus"></i></a>
                            </div>
                            <div class="col-md-6 col-md-pull-6 hidden-xs">
                                <img src="img/slides/slide1.png" alt="Slide 1" class="center-block img-responsive">
                            </div>
                        </div>
                    </div>
                    <!--Slide 2-->
                    <div class="item">
                        <div class="row">
                            <div class="col-md-6 text-right-md item-caption">
                                <h2 class="h1 text-weight-light">
                                    <span class="text-primary">Rating</span> soccer player and team
                                </h2>
                                <h4>
                                    To know and rate your favorite soccer team!
                                </h4>
                                <p>The best website of rating soccer players. You will get ideas how do others think about your favorite player.</p>
                                <a href="url{{'teamList'}}" class="btn btn-more btn-lg"><i class="fa fa-plus"></i> Learn More</a>
                            </div>
                            <div class="col-md-6 hidden-xs">
                                <img src="img/slides/slide2.png" alt="Slide 2" class="center-block img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{----}}

<div id="content">
    <!-- Mission Statement -->
    <div class="mission text-center block block-pd-sm block-bg-noise">
        <div class="container">
            <h2 class="text-shadow-white">
                The best website of rating soccer players and teams.
                {{--<a href="about.html" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>--}}
            </h2>
        </div>
    </div>

    <!--Showcase-->
    <div class="showcase block block-border-bottom-grey">
        <div class="container">
            <h2 class="block-title">
                Players
            </h2>
            <p>Part of rated players.</p>
            <div class="item-carousel" data-toggle="owlcarousel" data-owlcarousel-settings='{"items":4, "pagination":false, "navigation":true, "itemsScaleUp":true}'>
                <div class="item">
                    <a href="#" class="overlay-wrapper">
                        <img src="img/showcase/EdenHazard.jpg" alt="Eden Hazard" class="img-responsive underlay">
                        <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Eden Hazard</span> </span>
                </span>
                    </a>
                    <div class="item-details bg-noise">
                        <h4 class="item-title">
                            <a href="#">Eden Hazard</a>
                        </h4>
                        <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
                    </div>
                </div>
                <div class="item">
                    <a href="#" class="overlay-wrapper">
                        <img src="img/showcase/KevinDeBruyne.jpg" alt="Project 2 image" class="img-responsive underlay">
                        <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Project 2</span> </span>
                </span>
                    </a>
                    <div class="item-details bg-noise">
                        <h4 class="item-title">
                            <a href="#">Project 2</a>
                        </h4>
                        <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
                    </div>
                </div>
                <div class="item">
                    <a href="#" class="overlay-wrapper">
                        <img src="img/showcase/project3.png" alt="Project 3 image" class="img-responsive underlay">
                        <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Project 3</span> </span>
                </span>
                    </a>
                    <div class="item-details bg-noise">
                        <h4 class="item-title">
                            <a href="#">Project 3</a>
                        </h4>
                        <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
                    </div>
                </div>
                <div class="item">
                    <a href="#" class="overlay-wrapper">
                        <img src="img/showcase/project4.png" alt="Project 4 image" class="img-responsive underlay">
                        <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Project 4</span> </span>
                </span>
                    </a>
                    <div class="item-details bg-noise">
                        <h4 class="item-title">
                            <a href="#">Project 4</a>
                        </h4>
                        <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
                    </div>
                </div>
                <div class="item">
                    <a href="#" class="overlay-wrapper">
                        <img src="img/showcase/project5.png" alt="Project 5 image" class="img-responsive underlay">
                        <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Project 5</span> </span>
                </span>
                    </a>
                    <div class="item-details bg-noise">
                        <h4 class="item-title">
                            <a href="#">Project 5</a>
                        </h4>
                        <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
                    </div>
                </div>
                <div class="item">
                    <a href="#" class="overlay-wrapper">
                        <img src="img/showcase/project6.png" alt="Project 6 image" class="img-responsive underlay">
                        <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Project 6</span> </span>
                </span>
                    </a>
                    <div class="item-details bg-noise">
                        <h4 class="item-title">
                            <a href="#">Project 6</a>
                        </h4>
                        <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
                    </div>
                </div>
                <div class="item">
                    <a href="#" class="overlay-wrapper">
                        <img src="img/showcase/project7.png" alt="Project 7 image" class="img-responsive underlay">
                        <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Project 7</span> </span>
                </span>
                    </a>
                    <div class="item-details bg-noise">
                        <h4 class="item-title">
                            <a href="#">Project 7</a>
                        </h4>
                        <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
                    </div>
                </div>
                <div class="item">
                    <a href="#" class="overlay-wrapper">
                        <img src="img/showcase/project8.png" alt="Project 8 image" class="img-responsive underlay">
                        <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Project 8</span> </span>
                </span>
                    </a>
                    <div class="item-details bg-noise">
                        <h4 class="item-title">
                            <a href="#">Project 8</a>
                        </h4>
                        <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
                    </div>
                </div>
                <div class="item">
                    <a href="#" class="overlay-wrapper">
                        <img src="img/showcase/project9.png" alt="Project 9 image" class="img-responsive underlay">
                        <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Project 9</span> </span>
                </span>
                    </a>
                    <div class="item-details bg-noise">
                        <h4 class="item-title">
                            <a href="#">Project 9</a>
                        </h4>
                        <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
                    </div>
                </div>
                <div class="item">
                    <a href="#" class="overlay-wrapper">
                        <img src="img/showcase/project10.png" alt="Project 10 image" class="img-responsive underlay">
                        <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Project 10</span> </span>
                </span>
                    </a>
                    <div class="item-details bg-noise">
                        <h4 class="item-title">
                            <a href="#">Project 10</a>
                        </h4>
                        <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
                    </div>
                </div>
                <div class="item">
                    <a href="#" class="overlay-wrapper">
                        <img src="img/showcase/project11.png" alt="Project 11 image" class="img-responsive underlay">
                        <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Project 11</span> </span>
                </span>
                    </a>
                    <div class="item-details bg-noise">
                        <h4 class="item-title">
                            <a href="#">Project 11</a>
                        </h4>
                        <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
                    </div>
                </div>
                <div class="item">
                    <a href="#" class="overlay-wrapper">
                        <img src="img/showcase/project12.png" alt="Project 12 image" class="img-responsive underlay">
                        <span class="overlay">
                  <span class="overlay-content"> <span class="h4">Project 12</span> </span>
                </span>
                    </a>
                    <div class="item-details bg-noise">
                        <h4 class="item-title">
                            <a href="#">Project 12</a>
                        </h4>
                        <a href="#" class="btn btn-more"><i class="fa fa-plus"></i>Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{--all out block--}}
<div class="block block-pd-sm block-bg-primary">
    <div class="container">
        <div class="row">
        </div>
    </div>
</div>

<!-- ======== @Region: #footer ======== -->
<footer id="footer" class="block block-bg-grey-dark" data-block-bg-img="/images/bg_footer-map.png" data-stellar-background-ratio="0.4">
    <div class="container">

        <div class="row" id="contact">

            <div class="col-md-3">
                <address>
                    <strong>University of Windsor</strong>
                    <br>
                    <i class="fa fa-map-pin fa-fw text-primary"></i> 401 Sunset Ave, Windsor, ON, N9B 3P4
                    <br>
                    <i class="fa fa-phone fa-fw text-primary"></i> (519)253-3000
                    <br>
                    <i class="fa fa-envelope-o fa-fw text-primary"></i> zhou167@uwondsor.ca
                    <br>
                </address>
            </div>

            <div class="col-md-6">
                <h4 class="text-uppercase">
                    Contact Us
                </h4>
                <div class="form">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>

            <div class="col-md-3">
                <h4 class="text-uppercase">
                    Follow Us On:
                </h4>
                <!--social media icons-->
                <div class="social-media social-media-stacked">
                    <!--social media details-->
                    <a href="#"><i class="fa fa-twitter fa-fw"></i> Twitter</a>
                    <a href="#"><i class="fa fa-facebook fa-fw"></i> Facebook</a>
                    <a href="#"><i class="fa fa-linkedin fa-fw"></i> LinkedIn</a>
                    <a href="#"><i class="fa fa-google-plus fa-fw"></i> Google+</a>
                </div>
            </div>

        </div>

        <div class="row subfooter">
            <!--copyright details-->
            <div class="col-md-7">
                <p>Copyright © Mac699 front-end designer team 8 </p>
                <div class="credits">
                </div>
            </div>
            <div class="col-md-5">
                <ul class="list-inline pull-right">
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>

        <a href="#top" class="scrolltop">Top</a>

    </div>
</footer>

<!-- Required JavaScript Libraries -->
<script src="{{ asset('css/lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('css/lib/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('css/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('css/lib/stellar/stellar.min.js') }}"></script>
<script src="{{ asset('css/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('css/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('css/contactform/contactform.js') }}"></script>


<!-- Template Specisifc Custom Javascript File -->
<script src="{{ asset('css/js/custom.js') }}"></script>


<!--Custom scripts demo background & colour switcher - OPTIONAL -->
{{--<script src="/rating/public/css/js/color-switcher.js"></script>--}}

<!--Contactform script -->
<script src="{{ asset('css/contactform/contactform.js') }}"></script>


</body>
</html>
