<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>BeneFit.</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/landing-page.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <script src="/jquery/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="/bootstrap3/js/bootstrap.js" type="text/javascript"></script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body class="landing-page landing-page1">
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
                    <img src="/img/logo.png" alt="BeneFit." style="margin-top: -18px; height: 80px; weight:150px;">
                </div>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="example" >
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">
                        <i class="pe-7s-home"></i>
                        Home
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-user"></i>
                        Profile
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-ticket"></i>
                        Events List
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-graph1"></i>
                        Stats
                    </a>
                </li>
                @if(Auth::guard('admin')->user())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::guard('admin')->user()->fname .' '.  Auth::guard('admin')->user()->lname }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu" style="margin-top: 90px;">
                            <li><a href="{{ url('/admin/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @elseif(Auth::guard('organizer')->user())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::guard('organizer')->user()->fname .' '. Auth::guard('organizer')->user()->lname }} <span class="caret"></span>
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
<div class="wrapper">
    <div class="parallax filter-gradient blue" data-color="blue">
        <div class="parallax-background">
            <img class="parallax-background-image" src="/img/template/bg3.jpg">
        </div>
        <div class= "container">
            <div class="row">

                {{--<div class="col-md-5 hidden-xs">--}}
                    {{--<div class="parallax-image">--}}
                        {{--<img class="phone" src="/img/template/iphone3.png" style="margin-top: 20px"/>--}}
                    {{--</div>--}}
                {{--</div>--}}
                @yield('menu')
                {{--<div class="col-md-6 col-md-offset-1">--}}
                    {{--<div class="description">--}}
                        {{--<h2>Awesome landing page.</h2>--}}
                        {{--<br>--}}
                        {{--<h5>Be amazed by the best looking bootstrap landing page on the web! Your new app deserves an amazing page to show all of its features. Clear visual, light colours and beautifully aligned elements - they all try to make the users aware of your great app features!</h5>--}}
                    {{--</div>--}}
                    {{--<div class="buttons">--}}
                        {{--<button class="btn btn-fill btn-neutral">--}}
                            {{--<i class="fa fa-apple"></i> Appstore--}}
                        {{--</button>--}}
                        {{--<button class="btn btn-simple btn-neutral">--}}
                            {{--<i class="fa fa-android"></i>--}}
                        {{--</button>--}}
                        {{--<button class="btn btn-simple btn-neutral">--}}
                            {{--<i class="fa fa-windows"></i>--}}
                        {{--</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
    @yield('content')
    <footer class="footer">
        <div class="container">
            <nav class="pull-left">
                <ul>
                    <li>
                        <a href="#">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Company
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Portfolio
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Blog
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="social-area pull-right">
                <a class="btn btn-social btn-facebook btn-simple">
                    <i class="fa fa-facebook-square"></i>
                </a>
                <a class="btn btn-social btn-twitter btn-simple">
                    <i class="fa fa-twitter"></i>
                </a>
                <a class="btn btn-social btn-pinterest btn-simple">
                    <i class="fa fa-pinterest"></i>
                </a>
            </div>
            <div class="copyright">
                &copy; 2016 <a href="http://www.creative-tim.com">Creative Tim</a>, made with love
            </div>
        </div>
    </footer>
</div>

</body>
<script src="/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
<script src="/js/bootstrap.js" type="text/javascript"></script>
<script src="/js/awesome-landing-page.js" type="text/javascript"></script>
</html>

