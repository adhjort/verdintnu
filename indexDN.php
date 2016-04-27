<?session_start();
include 'loggedincheck.php';
//All info er nå å finne i $_SESSION['info']['data'];
?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<title>
	Verdi &middot; NTNU
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	
	<link href="assets/css/bootstrap.css" rel="stylesheet">

	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

	<style type="text/css">
	.center{
	text-align: center;
	}
	div#SEB.alert-success{
	background-color: RGB(104,204,39);
	text-color: white !important;
	}
	div#SEB.alert-success p{
	color: white;
	text-shadow: none;
	}
	div#SEB.alert-success b{
	color: white;
	}
	div#SEB.alert-success .center{
	text-align: center;
	}
	.nyhetsbrev p{
	color: black;
	}
	</style>
	<link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="../assets/ico/favicon.png">
	</head>
	<body>
		<!-- Javascript class for the facebook element -->
		<div id="fb-root"></div>
		<script>(function (d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/nb_NO/all.js#xfbml=1";
			fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		
		<div class="navbar-wrapper">
			<div class="container">
				<div class="masthead">
					<h3 class="muted">
						<img src="assets/img/verdintnu2.png" >
					</h3>
					<?php
							include 'loggoutnavDN.php';
					?>
				</div> <!-- /.mastheat -->
			</div> <!-- /.container -->
		</div> <!-- /.navbar wrapper -->
		
		<div class="container">
		    <div class="tab-content">
				<div class="tab-pane active" id="hjem">
					<?php 
						
							include 'hjem.php'; 
						?>
				</div> <!-- /tab pane -->
				<?php if ($_SESSION['loggedin']) {
					include 'profil.php';
				} ?>
				<div class="tab-pane" id="omoss">
					<?php include 'omoss.php'; ?>
				</div> <!--/tab-pane -->
				<div class="tab-pane" id="kontaktoss">
					<div class="row">
						<div class="span12">
						</div>
					</div>
				</div>
				<div class="tab-pane" id="DN">
					<div class="row">
						<div class="span12" style="text-align: center">
<p class="text-center">
							 <iframe  style="width: 80%"  src="http://dn.no" height="800"></iframe>
</p>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="veldedighet">
					<div class="row">
						<div class="span12">
							<div class="well well-large">
								<h4>Verdi NTNU støtter <a href="www.unicef.no">UNICEF</a> med overskudd fra sitt veldedige fond.</h4>
							</div>
						</div>
					</div>
				</div>
				<!--<div class="tab-pane" id="opptak">
					<div class="row">
						<div class="span12">
							<div class="well well-large">
								    <div class="alert alert-info">
									<h5>Verdi NTNU har ett opptak årlig - følg med på facebooksiden eller her på hjemmesiden, og det vil komme mer info ved opptak.</h5>
									</div>
							</div>
						</div>
					</div>
				</div>-->
				<div class="tab-pane" id="logginn">
					<div class="row">
						<div class="span6">
							<div class="well well-large">
								<p class='center'>Innlogging er bare for Verdimedlemmer og alumni, og gjøres via Innsida</p>
								<p><a class='btn' href="https://innsida.ntnu.no/sso?target=verdintnu">Logg inn</a></p>
							</div>
						</div>
					</div>
				</div>
		</div> <!-- /container -->
			<hr>
			<div class="center">
			<i>&copy; 2014 Verdi NTNU Webansvarlig: Bjørnar Brende Smestad</i>
			</div>
			<br>
			<br>
			<br>
		<div class="hidden-phone">
		<div class="navbar navbar-fixed-bottom">
			<div class="navbar-inner">
				<div class="images">
					<a href="http://www.SEB.no" target="_blank"><img src="assets/img/samarbeidspartnere/SEB.png"></a>
					<a href="http://www.dn.no" target="_blank"><img src="assets/img/samarbeidspartnere/DN.png"></a>
				</div>
			</div>
		</div> <!-- /navbar navbar-fixed-bottom -->
		</div>
	</div> <!-- /container -->
		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/bootstrap-dropdown.js"></script>
		<script src="assets/js/bootstrap-tab.js"></script>
		<script src="assets/js/bootstrap-button.js"></script>
		<script src="assets/js/bootstrap-collapse.js"></script>
		<script src="assets/js/bootstrap-carousel.js"></script>
	</body>
</html>
