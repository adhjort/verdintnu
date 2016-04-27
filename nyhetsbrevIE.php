<?php 
session_start();
include 'loggedincheck.php';
//All info er nå å finne i $_SESSION['info']['data'];
?>
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
	h3{
	text-align: center;
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
		
		
		<div class="container">
		<div class="nyhetsbrev">
		<div class="row">
		<div class="span5">
		</div>
			<h3>Last ned nyhetsbrevet <a href="NyhetsbrevIE.pdf">her!</a>
				</div>
			</div>
		</div> <!-- row -->
		<div class="hidden-phone">
		<div class="navbar navbar-fixed-bottom">
			<div class="navbar-inner">
				<div class="images">
					<a href="http://www.SEB.no" target="_blank"><img src="assets/img/samarbeidspartnere/SEB.png"></a>
					<a href="http://www.dn.no" target="_blank"><img src="assets/img/samarbeidspartnere/DN.png"></a>
					<a href="http://www.skagenfondene.no" target="_blank"><img src="assets/img/samarbeidspartnere/SKAGEN2.png"></a>
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
<script>
<!--[if IE]>
window.location.href = "http://verdintnu.no/NyhetsbrevIE.pdf";
<![endif]-->
</script>