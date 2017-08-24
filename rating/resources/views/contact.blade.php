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
                                Contact Us
                                <small>How to get in touch</small>
                            </h1>
                        </div>
                        <div class="block block-border-bottom-grey block-pd-sm">
                            <h3 class="block-title">
                                Email us
                            </h3>
                            {{--<img src="img/misc/ComputerScience.jpg" alt="About us" class="img-responsive img-thumbnail pull-right m-l m-b" width="300" height="200">--}}
                            <div class="col-md-6">
                                <h4 class="text-uppercase">
                                    Contact Us
                                </h4>
                                <div class="form">
                                    {{--<div id="sendmessage">Your message has been sent. Thank you!</div>--}}
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
                        </div>
                        <div class="block">
                        </div>
                    </div>
                    <!-- sidebar -->
                    <div class="col-md-3 col-md-pull-9 sidebar visible-md-block visible-lg-block">
                        <ul class="nav nav-pills nav-stacked">
                            <li>
                                <a href="{{url('mac699team8')}}" class="first">
                                    About Us
                                    <small>Front-end Web Designer Team 8</small>
                                </a>
                            </li>
                            <li class="active">
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
    </div>

        <script src="{{ asset('css/contactform/contactform.js') }}"></script>

    </body>

@endsection