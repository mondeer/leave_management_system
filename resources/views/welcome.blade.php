<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MTRH Leave System</title>

              <!-- Animate.css -->
      	<link rel="stylesheet" href="css/animate.css">
      	<!-- Icomoon Icon Fonts-->
      	<link rel="stylesheet" href="css/icomoon.css">
      	<!-- Magnific Popup-->
      	<link rel="stylesheet" href="css/magnific-popup.css">
      	<!-- Owl Carousel -->
      	<link rel="stylesheet" href="css/owl.carousel.min.css">
      	<link rel="stylesheet" href="css/owl.theme.default.min.css">
      	<!-- Bootstrap  -->
      	<link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="/css/font-awesome.min.css" media="screen" title="no title">

        <!-- Google Font -->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway">

      	<!-- Cards -->
      	<link rel="stylesheet" href="css/cards.css">
        <link rel="stylesheet" href="/css/style.css">

        <link rel="shortcut icon" href="imondcorp.ico">

    </head>
    <!-- <div id="fh5co-page"> -->




  		<div class="fh5co-cover fh5co-cover-style-2 js-full-height imond" data-stellar-background-ratio="0.5" data-next="yes">
  		  	<span class="scroll-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
  				<a href="#">
  					<span class="mouse"><span></span></span>
  				</a>
  			</span>
  			<div class="fh5co-overlay"></div>
  			<div class="fh5co-cover-text">

  				<div class="container">
            <div class="row">
              <br><br><h2 class="imond1 text-center">Automated Leave Management System <br>MTRH</h2>
            </div>
  					<div class="row">

              <div class="col-md-6 col-md-offset-3 full-height text-center">
  							<div class="fh5co-cover-intro">

                  <img src="images/mtrh.png" width="150" height="150" alt="" /><br><br>
                  <div class="panel panel-body imondopac">
                    <h1 class="imondwhite">Login to MTRH LMS</h1>
                    <form class="form-horizontal" role="form" method="POST" action="/login">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>

                                        <a class="btn btn-link" href="/register">
                                            Register
                                        </a>
                                    </div>
                                </div>
                            </form>
                  </div>
  							</div>
  						</div>

  						</div>
  					</div>
  				</div>
  			</div>

  		<!-- </div> -->

      <!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
   <script src="js/jquery.waypoints.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- WOW -->
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<!-- Main -->
	<script src="js/main.js"></script>

    </body>
</html>
