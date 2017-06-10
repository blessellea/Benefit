<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="img/favicon.png">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>BeneFit.</title>

		<link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />

		<link href="css/login-register.css" rel="stylesheet" />
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

			<script src="/jquery/jquery-1.10.2.js" type="text/javascript"></script>
			<script src="/bootstrap3/js/bootstrap.js" type="text/javascript"></script>
			<script src="/js/login-register.js" type="text/javascript"></script>


			<!-- Bootstrap core CSS     -->
			<link href="css/bootstrap.min.css" rel="stylesheet" />

			<!-- Animation library for notifications   -->
			<link href="css/animate.min.css" rel="stylesheet"/>

			<!--  Light Bootstrap Table core CSS    -->
			<link href="css/light-bootstrap-dashboard.css" rel="stylesheet"/>


			<!--  CSS for Demo Purpose, don't include it in your project     -->
			<link href="css/demo.css" rel="stylesheet" />


			<!--     Fonts and icons     -->
			<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
				<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
					<link href="css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>
<div class="wrapper">
	<div class="sidebar" data-color="azure" data-image="img/sidebar-5.jpg">

		<!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

		<div class="sidebar-wrapper">
			<div class="logo">
				<a href="http://www.creative-tim.com" class="simple-text">
					<img src="img/logo.png" style="height:100px; weight:200px;">
				</a>
			</div>

			<ul class="nav">
				<li class="active">
					<a href="dashboard">
						<i class="pe-7s-graph"></i>
						<p>Dashboard</p>
					</a>
				</li>
				<li>
					<a href="user">
						<i class="pe-7s-user"></i>
						<p>User Profile</p>
					</a>
				</li>
				<li>
					<a href="table">
						<i class="pe-7s-note2"></i>
						<p>Table List</p>
					</a>
				</li>
				<li>
					<a href="typography">
						<i class="pe-7s-news-paper"></i>
						<p>Typography</p>
					</a>
				</li>
				<li>
					<a href="icons">
						<i class="pe-7s-science"></i>
						<p>Icons</p>
					</a>
				</li>
				<li>
					<a href="maps">
						<i class="pe-7s-map-marker"></i>
						<p>Maps</p>
					</a>
				</li>
				<li>
					<a href="notifications">
						<i class="pe-7s-bell"></i>
						<p>Notifications</p>
					</a>
				</li>
				<li class="active-pro">
					<a href="upgrade">
						<i class="pe-7s-rocket"></i>
						<p>Upgrade to PRO</p>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Dashboard</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-left">
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-dashboard"></i>
							</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-globe"></i>
								<b class="caret"></b>
								<span class="notification">5</span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Notification 1</a></li>
								<li><a href="#">Notification 2</a></li>
								<li><a href="#">Notification 3</a></li>
								<li><a href="#">Notification 4</a></li>
								<li><a href="#">Another notification</a></li>
							</ul>
						</li>
						<li>
							<a href="">
								<i class="fa fa-search"></i>
							</a>
						</li>
					</ul>

					<ul class="nav navbar-nav navbar-right">

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								Dropdown
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
						<!-- Authentication Links -->
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
			</div>
		</nav>

		<div class="modal fade login" id="loginModal">
			<div class="modal-dialog login animated">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Login with</h4>
					</div>
					<div class="modal-body">
						<div class="box">
							<div class="content">
								<div class="social">
									<a class="circle github" href="/auth/github">
										<i class="fa fa-github fa-fw"></i>
									</a>
									<a id="google_login" class="circle google" href="/auth/google_oauth2">
										<i class="fa fa-google-plus fa-fw"></i>
									</a>
									<a id="facebook_login" class="circle facebook" href="/auth/facebook">
										<i class="fa fa-facebook fa-fw"></i>
									</a>
								</div>
								<div class="division">
									<div class="line l"></div>
									<span>or</span>
									<div class="line r"></div>
								</div>
								<div class="error"></div>
								<div class="form loginBox">
									<form method="POST" action="{{ url('/login') }}" accept-charset="UTF-8">
                                        {{ csrf_field() }}

										<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
											<input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
												@if ($errors->has('email'))
												<span class="help-block">
														<strong>{{ $errors->first('email') }}</strong>
													</span>
												@endif
										</div>

										<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
											<input id="password" type="password" class="form-control" placeholder="Password" name="password">
												@if ($errors->has('password'))
												<span class="help-block">
														<strong>{{ $errors->first('password') }}</strong>
													</span>
												@endif
										</div>

										<div class="form-group">
											<div class="checkbox">
												<label>
													<input type="checkbox" name="remember"> Remember Me
												</label>
											</div>
										</div>

										<div class="form-group">
											<input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()">
												<a href="{{ url('/password/reset') }}">Forgot Your Password?</a>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="box">
							<div class="content registerBox" style="display:none;">
								<div class="form">
									<form method="post" html="{:multipart=>true}" data-remote="true" action="/register" accept-charset="UTF-8">
                                        {{ csrf_field() }}

										<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
											<input id="name" type="text" class="form-control" placeholder="Name" name="name" value="{{ old('name') }}">
												@if ($errors->has('name'))
												<span class="help-block">
														<strong>{{ $errors->first('name') }}</strong>
													</span>
												@endif
										</div>

										<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
											<input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
												@if ($errors->has('email'))
												<span class="help-block">
														<strong>{{ $errors->first('email') }}</strong>
													</span>
												@endif
										</div>

										<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
											<input id="password" type="password" class="form-control" placeholder="Password" name="password">
												@if ($errors->has('password'))
												<span class="help-block">
														<strong>{{ $errors->first('password') }}</strong>
													</span>
												@endif
										</div>

										<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
											<input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
												@if ($errors->has('password_confirmation'))
												<span class="help-block">
														<strong>{{ $errors->first('password_confirmation') }}</strong>
													</span>
												@endif
										</div>
										<div class="form-group">
											<input class="btn btn-default btn-register" type="submit" value="Create account" name="commit">
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<div class="forgot login-footer">
                            <span>Looking to
                                 <a href="javascript: showRegisterForm();">create an account</a>
                            ?</span>
						</div>
						<div class="forgot register-footer" style="display:none">
							<span>Already have an account?</span>
							<a href="javascript: showLoginForm();">Login</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		@yield('content')
</body>

<!--   Core JS Files   -->
<script src="js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="js/bootstrap-checkbox-radio-switch.js"></script>

<!--  Charts Plugin -->
<script src="js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="js/light-bootstrap-dashboard.js"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="js/demo.js"></script>

</html>


