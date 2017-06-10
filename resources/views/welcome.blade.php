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
<div class="wrapper">
    <div class="parallax filter-gradient blue" data-color="blue">
        <div class="parallax-background">
            <img class="parallax-background-image" src="/img/template/bg3.jpg">
        </div>
        <div class= "container">
            <div class="row">
                <div class="col-md-5 hidden-xs">
                    <div class="parallax-image">
                        <img class="phone" src="/img/template/iphone3.png" style="margin-top: 20px"/>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-1">
                    <div class="description">
                        {{--<h2>Bene.</h2>--}}
                        <img src="/img/logo.png" alt="BeneFit." style="margin-left: -20px; height: 100px; weight:170px;">
                        <br>
                        <h5>A Gamified Mobile & Web-based Application for Running Events for a Cause.</h5>
                    </div>
                    <div class="buttons">
                        <button class="btn btn-fill btn-neutral">
                            <i class="fa fa-apple"></i> Appstore
                        </button>
                        <button class="btn btn-simple btn-neutral">
                            <i class="fa fa-android"></i>
                        </button>
                        <button class="btn btn-simple btn-neutral">
                            <i class="fa fa-windows"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-gray section-clients">
        <div class="container text-center">
            <h4 class="header-text">Friends in high places</h4>
            <p>
                Build customer confidence by listing your users! Anyone who has used your service and has been pleased with it should have a place here! From Fortune 500 to start-ups, all your app enthusiasts will be glad to be featured in this section. Moreover, users will feel confident seing someone vouching for your product!<br>
            </p>
            <div class="logos">
                <ul class="list-unstyled">
                    <li ><img src="/img/logos/adobe.png"/></li>
                    <li ><img src="/img/logos/zendesk.png"/></li>
                    <li ><img src="/img/logos/ebay.png"/></i>
                    <li ><img src="/img/logos/evernote.png"/></li>
                    <li ><img src="/img/logos/airbnb.png"/></li>
                    <li ><img src="/img/logos/zappos.png"/></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section section-presentation">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="description">
                        <h4 class="header-text">It's beautiful</h4>
                        <p>And your app is also probably social, awesome, easy-to-use and vital to users. This is the place to enlist all the good things that your app has to share. Focus on the benefits that the uers will receive. Try to combine imaginery with text and show meaningful printscreens from your app, that will make it clear what exactly the basic functions are. </p>
                        <p>Try to make it very clear for the people browsing the page that this product will enrich their life and will make a nice addition to the homescreen.
                        <p>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1 hidden-xs">
                    <img src="/img/template/mac.png"/>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-demo">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="description-carousel" class="carousel fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item">
                                <img src="/img/template/examples/home_33.jpg" alt="">
                            </div>
                            <div class="item active">
                                <img src="/img/template/examples/home_22.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="/img/template/examples/home_11.jpg" alt="">
                            </div>
                        </div>
                        <ol class="carousel-indicators carousel-indicators-blue">
                            <li data-target="#description-carousel" data-slide-to="0" class=""></li>
                            <li data-target="#description-carousel" data-slide-to="1" class="active"></li>
                            <li data-target="#description-carousel" data-slide-to="2" class=""></li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <h4 class="header-text">Easy to integrate</h4>
                    <p>
                        With all the apps that users love! Make it easy for users to share, like, post and tweet their favourite things from the app. Be sure to let users know they continue to remain connected while using your app!
                    </p>
                    <a href="http://www.creative-tim.com/product/awesome-landing-page" id="Demo3" class="btn btn-fill btn-info" data-button="info">Get Free Demo</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-features">
        <div class="container">
            <h4 class="header-text text-center">Features</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-blue">
                        <div class="icon">
                            <i class="pe-7s-note2"></i>
                        </div>
                        <div class="text">
                            <h4>Online Customers Management</h4>
                            <p>All appointments sync with your Google calendar so your availability is always up to date. See your schedule at a glance from any device.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-blue">
                        <div class="icon">
                            <i class="pe-7s-bell"></i>
                        </div>
                        <h4>Smart Notifications on hands</h4>
                        <p>Automatic text and email reminders make sure customers always remember their upcoming appointments.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-blue">
                        <div class="icon">
                            <i class="pe-7s-graph1"></i>
                        </div>
                        <h4>Know your business better now</h4>
                        <p>Take payments and run your business on the go, in your store and then see how it all adds up with analytics.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-testimonial">
        <div class="container">
            <h4 class="header-text text-center">What people think</h4>
            <div id="carousel-example-generic" class="carousel fade" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item">
                        <div class="mask">
                            <img src="/img/faces/face-4.jpg">
                        </div>
                        <div class="carousel-testimonial-caption">
                            <p>Jay Z, Producer</p>
                            <h3>"I absolutely love your app! It's truly amazing and looks awesome!"</h3>
                        </div>
                    </div>
                    <div class="item active">
                        <div class="mask">
                            <img src="/img/faces/face-3.jpg">
                        </div>
                        <div class="carousel-testimonial-caption">
                            <p>Drake, Artist</p>
                            <h3>"This is one of the most awesome apps I've ever seen! Wish you luck Creative Tim!"</h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mask">
                            <img src="/img/faces/face-2.jpg">
                        </div>
                        <div class="carousel-testimonial-caption">
                            <p>Rick Ross, Musician</p>
                            <h3>"Loving this! Just picked it up the other day. Thank you for the work you put into this."</h3>
                        </div>
                    </div>
                </div>
                <ol class="carousel-indicators carousel-indicators-blue">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="section section-no-padding">
        <div class="parallax filter-gradient blue" data-color="blue">
            <div class="parallax-background">
                <img class ="parallax-background-image" src="/img/template/bg3.jpg"/>
            </div>
            <div class="info">
                <h1>Download this landing page for free!</h1>
                <p>Beautiful multipurpose bootstrap landing page.</p>
                <a href="http://www.creative-tim.com/product/awesome-landing-page" class="btn btn-neutral btn-lg btn-fill">DOWNLOAD</a>
            </div>
        </div>
    </div>
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

