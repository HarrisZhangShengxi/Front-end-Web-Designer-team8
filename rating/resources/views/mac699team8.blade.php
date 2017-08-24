@extends('layouts.index')

@section('content')

    <body class="page-about">
    <div id="background-wrapper" class="buildings" data-stellar-background-ratio="0.8">
    <!-- ======== @Region: #content ======== -->
    <div id="content">
        <div class="container" id="about">
            <div class="row">
                <!--main content-->
                <div class="col-md-9 col-md-push-3">
                    <div class="page-header">
                        <h1>
                            About Us
                            <small>Front-end Web Designer Team 8</small>
                        </h1>
                    </div>
                    <div class="block block-border-bottom-grey block-pd-sm">
                        <h3 class="block-title">
                            Who are we and what we do?
                        </h3>
                        <img src="img/misc/ComputerScience.jpg" alt="About us" class="img-responsive img-thumbnail pull-right m-l m-b" width="300" height="200">
                        <p>
                            We are front-end web designer team 8 from Applied Computing Science of University of Windsor.<br>
                            Team member: Hang Zhou, Shengxi Zhang.<br>
                            Advisor: Dr. Stephanos Mavromoustakos.<br>
                            This website is for the internship of course 699. <br>
                            Develop tools: Laravel framework, phpStorm, GitHub, Bootstrap. <br>
                            Develop languages: php, mySQL, html, css.

                        </p>
                    </div>
                    <div class="block-highlight block-pd-h block-pd-sm">
                        <h3 class="block-title">
                            Our Mission
                        </h3>
                        <p class="text-fancy">
                            Develop a website that will allow users to rate a professional e.g. doctor, lawyer, athlete, etc.
                        </p>
                    </div>
                    <div class="block">
                        <h3 class="block-title">
                            Vital Stats
                        </h3>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="stat">
                                    <span data-counter-up>1000</span>s
                                    <small>Happy Users</small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="stat">
                                    <span data-counter-up>89</span>+
                                    <small>Rated Players</small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="stat">
                                    <span data-counter-up>6</span>
                                    <small>Rated Teams</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidebar -->
                <div class="col-md-3 col-md-pull-9 sidebar visible-md-block visible-lg-block">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active">
                            <a href="{{url('mac699team8')}}" class="first">
                                About Us
                                <small>Front-end Web Designer Team 8</small>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('contact')}}">
                                Contact Us
                                <small>How to get in touch</small>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </body>

@endsection