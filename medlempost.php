<?php include 'medleminsert.php';
	?>
	
<!DOCTYPE html>
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
	
    <script type="text/javascript" src="../js/arr.js"></script>
    <script type="text/javascript" src="../js/stockquotes.js"></script>
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
					<div class="navbar navbar-inverse">
						<div class="navbar-inner">
							<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</a>
							<!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
							<div class="nav-collapse collapse">
								<ul class="nav">
									<li class="active"><a href="http://www.verdintnu.no/#hjem">Hjem</a></li>
									<li><a href="http://www.verdintnu.no/#omoss">Om oss</a></li>
									<li><a href="http://www.verdintnu.no/#opptak">Opptak</a></li>
									<li><a href="http://www.verdintnu.no/#kontaktoss">Kontakt oss</a></li>
									<li><a href="http://www.verdintnu.no/#veldedighet">Veldedighet</a></li>
								</ul>
								<ul class="nav pull-right">
									<li><a href="http://www.verdintnu.no/#logginn">Logg inn</a></li>
								</ul>
							</div><!--/.nav-collapse -->
						</div><!-- /.navbar-inner -->
					</div><!-- /.navbar navbar-inverse -->
				</div> <!-- /.mastheat -->
			</div> <!-- /.container -->
		</div> <!-- /.navbar wrapper -->
		<div class="container">
		    <div class="tab-content">
					<?php if ($login){
					$navn = utf8_encode($navn);
					$etternavn = utf8_encode($etternavn);
					echo "<div class='alert alert-success'>
						<h4><small>Takk,</small> <strong>{$navn} {$etternavn}</strong> <small>du har nå registrert ditt brukernavn som</small> <strong>{$brukernavn}</strong> <small>, ditt avgangsår til </small><strong>{$avgangsar}</strong><small> og din arbeidsgiver til </small><strong>{$arbeidsgiver}</strong></h4> <p>Har du lagt inn feil info, send en mail til bjornasm (at) stud.ntnu.no</p>
					</div>";
					$login = false;}
					else {
					echo "<div class='alert alert-error'>
					<h4>Det ser ut til at du skrev inn feil kode, prøv igjen </h4>
					</div>";}
					
					?>
			</div> <!-- /tab content -->
		<div class="hidden-phone">
		<div class="navbar navbar-fixed-bottom">
			<div class="navbar-inner">
				<div class="images">
					<img src="assets/img/samarbeidspartnere/SEB.png">
					<img src="assets/img/samarbeidspartnere/DN.png">
					<img src="assets/img/samarbeidspartnere/SKAGEN2.png">
				</div>
			</div>
		</div> <!-- /navbar navbar-fixed-bottom -->
		</div>
	</div> <!-- /container -->

		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/bootstrap-transition.js"></script>
		<script src="assets/js/bootstrap-alert.js"></script>
		<script src="assets/js/bootstrap-modal.js"></script>
		<script src="assets/js/bootstrap-dropdown.js"></script>
		<script src="assets/js/bootstrap-scrollspy.js"></script>
		<script src="assets/js/bootstrap-tab.js"></script>
		<script src="assets/js/bootstrap-tooltip.js"></script>
		<script src="assets/js/bootstrap-popover.js"></script>
		<script src="assets/js/bootstrap-button.js"></script>
		<script src="assets/js/bootstrap-collapse.js"></script>
		<script src="assets/js/bootstrap-carousel.js"></script>
		<script src="assets/js/bootstrap-typeahead.js"></script>
	</body>
</html>
