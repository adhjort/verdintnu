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
									<li class="active"><a href="#hjem" data-toggle="tab">Hjem</a></li>
									<li><a href="#omoss" data-toggle="tab">Om oss</a></li>
									<li><a href="#opptak" data-toggle="tab">Opptak</a></li>
									<li><a href="#kontaktoss" data-toggle="tab">Kontakt oss</a></li>
									<li><a href="#veldedighet" data-toggle="tab">Veldedighet</a></li>
								</ul>
								<ul class="nav pull-right">
									<li><a href="#logginn" data-toggle="tab">Logg inn</a></li>
								</ul>
							</div><!--/.nav-collapse -->
						</div><!-- /.navbar-inner -->
					</div><!-- /.navbar navbar-inverse -->
				</div> <!-- /.mastheat -->
			</div> <!-- /.container -->
		</div> <!-- /.navbar wrapper -->
		<div class="container container-narrow">
		    <div class="tab-content">
				<div class="well">
					<form class="form-horizontal" id="medlemsregistrering" name="registrering" method="POST" action="medlempost.php" >
						<div class="control-group">
									<label>Fornavn</label>
									<input type="text" name="navn" id="navn1" placeholder="Fornavn">
								</div>
								<div class="control-group">
									<label>Etternavn</label>
									<input type="text" name="etternavn" id="etternavn1" placeholder="Etternavn">
								</div>
								<div class="control-group">
									<label>Telefonnummer</label>
									<input type="text" name="telefonnummer" id="telefonnummer1" placeholder="Ditt telefonnummer">
								</div>
								<div class="control-group">
									<label>Brukernavn</label>
									<input type="text" name="brukernavn" value="brukernavn" placeholder="NTNU-brukernavnet ditt">
								</div>
								<div class="control-group">
									<label>E-mail</label>
									<div class="input-append">
										<input type="text" name="epost" id="epost1" placeholder="Dinmail@noe.no (ikke studmail)">
									</div>
								</div>
								<div class="control-group">
									<label>Ditt avgangsår</label>
									<select id="avgangsar" name="avgangsar">
										<option>2010</option>
										<option>2011</option>
										<option>2012</option>
										<option>2013</option>
										<option>2014</option>
										<option>2015</option>
										<option>2016</option>
										<option>2017</option>
										<option>2018</option>
									</select>
								</div>
								<div class="control-group">
									<label>Arbeidsgiver</label>
									<input type="text" name="arbeidsgiver" id="arbeidsgiver" placeholder='Arbeidsgiver'>
								</div>
								<div class="control-group">
									<label class="checkbox">
										<p>Hak av om du ikke lenger anser deg som medlem av Verdi, og er alumni<input type="checkbox" value="Ja" id="alumni" name="alumni"></p>
									</label>
								</div>
								<div class="control-group">
								<p>Hemmelig kode ("If you're not inside, you're outside, okay?")</p>
								<input type="text" name="kode" id="kode" placeholder="Hemmelig kode ">
								</div>
								<button type="submit" class="btn">Registrer</button>
					</form
					<br/>
					<br/> 
							
				</div>
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
