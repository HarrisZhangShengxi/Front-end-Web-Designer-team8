
{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: hangzhou--}}
 {{--* Date: 2017-08-22--}}
 {{--* Time: 8:23 AM--}}
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




<body class="fullscreen-centered page-login">
<br><br><br><br><br><br><br>

<div id="background-wrapper" class="benches" data-stellar-background-ratio="0.8">

    <div class="content">
        <div class="header">
            <div class="header-inner">
                <!--navbar-branding/logo - hidden image tag & site name so things like Facebook to pick up, actual logo set via CSS for flexibility -->
                <a class="navbar-brand center-block" href="index.html" title="Home">
                    <h1 class="hidden">
                        <img src="/rating/public/css/img/logo.png" alt="Rating Logo">
                        Rating
                    </h1>
                </a>
            </div>
        </div>
        <div class="row">

            @yield('content')

        </div>
    </div>
</div>
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
{{--@endsection--}}
