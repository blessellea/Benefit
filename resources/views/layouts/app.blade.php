<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    {{--<link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png" />--}}
    <link rel="icon" type="image/png" href="/img/favicon.png" />
    <title>BeneFit.</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="/css/bootstrap.css" rel="stylesheet" />
    <link href="/css/landing-page.css" rel="stylesheet"/>

    <!-- CSS Files -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/paper-bootstrap-wizard.css" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/css/demo.css" rel="stylesheet" />

    <!-- Fonts and Icons -->
    <script src="/jquery/jquery-1.10.2.js" type="text/javascript"></script>
    {{--<script src="/bootstrap3/js/bootstrap.js" type="text/javascript"></script>--}}
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>

    <link href="/css/pe-icon-7-stroke.css" rel="stylesheet" />
    {{--<link href="/css/themify-icons.css" rel="stylesheet">--}}
</head>

<body class="landing-page landing-page1">
<div class="image-container set-full-height" style="background-image: url('/img/template/bg3.jpg')">

    <nav class="navbar navbar-transparent navbar-top" role="navigation">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a href="#">
                    <div class="logo-container">
                        <img src="/img/logo.png" alt="BeneFit." style="margin-top: -28px; height: 80px; weight:150px;">
                    </div>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="example" >
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">
                            <i class="fa fa-facebook-square"></i>
                            Like
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                            Tweet
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-pinterest"></i>
                            Pin
                        </a>
                    </li>
                    <!-- Authentication Links -->
                    @if(Auth::guard('admin')->user())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::guard('admin')->user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu" style="margin-top: 90px;">
                                <li><a href="{{ url('/admin/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @elseif(Auth::guard('organizer')->user())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::guard('organizer')->user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu" style="margin-top: 90px;">
                                <li><a href="{{ url('/organizer/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @elseif(Auth::guard('user')->user())
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::guard('user')->user()->fname.' '.Auth::guard('user')->user()->lname }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu" style="margin-top: 90px;">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Login as
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu" style="margin-top: 90px;">
                                <li><a href="{{ url('/login') }}">Runner</a></li>
                                <li><a href="{{ url('/organizer/login') }}">Organizer</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Register as
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu" style="margin-top: 90px; ;">
                                <li><a href="{{ url('/register') }}">Runner</a></li>
                                <li><a href="{{ url('/organizer/register') }}">Organizer</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>

    <!--   Big container   -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <!--      Wizard container        -->
                <div class="wizard-container">

                    <div class="card wizard-card" data-color="orange" id="wizardProfile">
                        @yield('content')
                    </div>
                </div> <!-- wizard container -->
            </div>
        </div><!-- end row -->
    </div> <!--  big container -->

    <div class="footer">
        <div class="container text-center">
            Made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>. Free download <a href="http://www.creative-tim.com/product/paper-bootstrap-wizard">here.</a>
        </div>
    </div>
</div>

</body>

<!--   Core JS Files   -->
<script src="/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/js/bootstrap.js" type="text/javascript"></script>
<script src="/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="/js/jquery.validate.min.js" type="text/javascript"></script>

<!--  Plugin for the Landing Page -->
<script src="/js/awesome-landing-page.js" type="text/javascript"></script>
</html>
</html>
