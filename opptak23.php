<?php 
session_start();
include 'loggedincheck.php';
//All info er nå å finne i $_SESSION['info']['data'];
	INCLUDE 'rot/connect/base.php';// Connect to server and select database.
	
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
							include 'loggoutnav.php';
					?>
				</div> <!-- /.mastheat -->
			</div> <!-- /.container -->
		</div> <!-- /.navbar wrapper -->
		
		<div class="container">
		    <div class="tab-content">
				<div class="tab-pane" id="hjem">
					<?php 
						
							include 'hjem.php'; 
						?>
				</div> <!-- /tab pane -->
				<div class="tab-pane" id="omoss">
					<?php include 'omoss.php'; ?>
				</div> <!--/tab-pane -->
				<div class="tab-pane" id="kontaktoss">
					<div class="row">
						<div class="span12">
							<div class="well well-large">
								<div class="row">
								<div class="span1">
								</div>
								<div class="span8">
								<b>Fondsleder</b> <p>Christoffer Bordonado - christoffer.bordonado (at) gmail.com</p>
								<b>Arrangementsansvarlig</b> <p>Martin Hjelmeland - Marhje90 (at) gmail.com</p>
								<b>Webansvarlig</b> <p>Bjørnar B. Smestad - bjornasm (at) stud.ntnu.no</p>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="veldedighet">
					<div class="row">
						<div class="span12">
							<div class="well well-large">
			
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane active" id="opptak">					
							<div class="well well-large">
								<div class="row">
									<div class="span2">
									</div>
									<div class="span8">   
										<p><strong>Ønsker du å lære mer om aksjer, børs og finans gjennom aktiv forvalting av et fond? Kunne du tenke deg å arrangere foredrag med noen av Norges største finanspersonligheter? Vil du være med å utvikle en webplattform som gjør at Verdi NTNUs nettsider er NTNU studenters fremste kilde for aksjetips? Eller vil du heller være ansvarlig for at julebordet aldri tar slutt?</strong></p>
										<p>
										Verdi NTNU er finansgruppen ved NTNU. Vi har som mål å skape et aktivt finansmiljø på NTNU, og opprettholde et sosialt og faglig felleskap for våre medlemmer.
										</p>
										<p>
										Vi i Verdi NTNU ser etter nye medlemmer denne høsten og vi vil ha med deg!
										</p>
										<strong>Hva innebærer et verv i verdi?</strong>
										<p>
										Vi har ukentlige møter der alle medlemmene treffes for lære, diskutere og forvalte vårt veldedighetsfond. Disse starter som regel med en teorileksjon der de mest erfarne medlemmene underviser i et tema innenfor finans, etterfulgt av en caseoppgave der kunnskapen skal brukes i praksis. Vi gjennomgår også status for vårt fond, og diskuterer om aksjer skal inn eller ut av porteføljen. I tillegg er det mulighet for å komme med forslag til alternative investeringer Verdi NTNU kan gjennomføre.
										</p>
										<p>
										Ved siden av de interne Verdi-møtene arrangeres det foredrag for alle NTNUs studenter. Da henter vi inn kjente finanspersonligheter og lar dem undervise i et spennende tema de er eksperter på.
										</p>
										<p>
										I tillegg til informasjon angående foredrag, publiseres også aksjetips og endringer i vår portefølje på Verdi NTNUs nettsider. Vi jobber for at nettsiden vår skal bli en populær kilde for finansinteresserte studenter ved NTNU, og vi trenger derfor din hjelp til å utvikle denne!
										<p>
										Sist, men ikke minst, arrangerer vi store og små sosiale tilstelninger der alle medlemmene møtes og blir bedre kjent. Alt fra filmkveld til fredagspils og julebord er en stor del av hva vervet i Verdi NTNU innebærer. 
										</p>
										
										<div class="accordion" id="accordion2">
											<div class="accordion-group">
												<div class="accordion-heading">
													<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
														<button class="btn btn-primary" type="button">Søknadsskjema</button>
													</a>
												</div>
													
												<div id="collapseOne" class="accordion-body collapse">
													<div class="accordion-inner">
														<form class="form-horizontal" id="medlemsregistrering" name="registrering" method="POST" action="opptak23.php" >
															<div class="control-group">
																<label>Navn</label>
																<input type="text" name="Name" id="Name" placeholder="Ditt navn">
															</div>
															<div class="control-group">
																<label>Telefonnummer</label>
																<input type="text" name="Phone" id="Phone" placeholder="Ditt telefonnummer">
															</div>
															<div class="control-group">
																<label>E-mail</label>
																<div class="input-append">
																	<input type="text" name="Email" id="Email" placeholder="Dinmail@noe.no">
																</div>
															</div>
															<div class="control-group">
																<label>Hvorfor vil du bli med i Verdi NTNU?</label>
																<div class="input-append">
																	<textarea class="input-xxlarge" rows="5" name="Begrunnelse" id="Begrunnelse" placeholder="Skriv litt om hvorfor du søker på opptak til Verdi"></textarea>
																</div>
															</div>
															<div class="control-group">
																<label>
																	Skriv kort om hvilke egenskaper/kompetanse du har som kan bidra til å gjøre Verdi NTNU bedre.
																</label>
																<div class="input-append">
																	<textarea class="input-xxlarge" rows="2" name="Egenskaper" id="Egenskaper"></textarea>
																</div>
															</div>
															<div class="control-group">
																<label>
																	Hvor mange timer i uka ser du for seg å bruke på forberedelser og arbeid relatert til ditt engasjement i Verdi NTNU?
																</label>
																<div class="input-append">
																	<textarea class="input-xxlarge" rows="1" name="Timer" id="Timer"></textarea>
																</div>
															</div>
															<div class="control-group">
																<label>
																	Har du annen erfaring/kunnskap utover det som er kommet fram ovenfor som vi i
																	opptakskomiteen bør ha kjennskap til?
																</label>
																<div class="input-append">
																	<textarea class= "input-xxlarge" rows="5" columns="10" name="Annet" id="Annet"></textarea>
																</div>
															</div>
															<button type="submit" class="btn">Registrer</button>
															<br>
															<small>Du vil få en bekreftelsesmelding på denne siden om alt gikk bra, får du ikke dette - ta kontakt med bjornasm [at] stud.ntnu.no. Innsending av skjemaet kan ta noe tid. </small>
														</form>
													</div>
												</div>
											</div>
											<hr>
										</div>
									</div>
								</div>
							</div>
				</div>
				<div class="tab-pane" id="logginn">
					<div class="row">
						<div class="span12">
							<div class="well well-large">
								<p class='center'>Innlogging er bare for Verdimedlemmer og alumni, og gjøres via Innsida</p>
								<p><a class='btn' href="https://innsida.ntnu.no/sso?target=verdintnu">Logg inn</a></p>
								<p>Er du Verdimedlem, men har ikke enda registrert deg? Trykk <a href="medlemsliste.php">her</a>. Kode får du hos bjornasm (a) stud.ntnu.no</p>
							</div>
						</div>
					</div>
				</div>
				<!--<div class="tab-pane" id="portefoljen">
					<?php //include 'portefoljen.php'; ?>
				</div> <!--/tab-pane -->
				<?php if ($_SESSION['loggedin']) {
					include 'profil.php';
				
				} ?>
			</div> <!-- /tab content -->
			<hr>
			<div class="center">
			<i>&copy; 2013 Verdi NTNU Webansvarlig: Bjørnar Brende Smestad</i>
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
		<script src="assets/js/bootstrap-dropdown.js"></script>
		<script src="assets/js/bootstrap-tab.js"></script>
		<script src="assets/js/bootstrap-button.js"></script>
		<script src="assets/js/bootstrap-collapse.js"></script>
		<script src="assets/js/bootstrap-carousel.js"></script>
		<script src="assets/js/bootstrap-modal.js"></script>
		
		<?php
if ($_POST['Name'] || $_POST['Email'])
	{	
		if (mysql_real_escape_string($_POST['Email'])){
			$Email = mysql_real_escape_string($_POST['Email']);
		}
		else 
		{
			$Email = "tom";
		}
		
		if (mysql_real_escape_string($_POST['Name']))
		{
			$Navn = mysql_real_escape_string($_POST['Name']);
		}
		else
		{
			$Navn = "tom";
		}
		if  (mysql_real_escape_string($_POST['Begrunnelse']))
		{
			$Begrunnelse = mysql_real_escape_string($_POST['Begrunnelse']);
		}
		else
		{
			$Begrunnelse = "tom";
		}
		if (mysql_real_escape_string($_POST['Egenskaper']))
		{
			$Egenskaper = mysql_real_escape_string($_POST['Egenskaper']);
		}
		else
		{
			$Egenskaper = "tom";
		}
		if (mysql_real_escape_string($_POST['Timer']))
		{
			$Timer = mysql_real_escape_string($_POST['Timer']);
		}
		else
		{
			$Timer = "tom";
		}
		if (mysql_real_escape_string($_POST['Annet']))
		{
			$Annet = mysql_real_escape_string($_POST['Annet']);
		}
		else
		{
			$Annet = "tom";
		}
		if (mysql_real_escape_string($_POST['TLF']))
		{
			$TLF = mysql_real_escape_string($_POST['TLF']);
		}
		else
		{
			$TLF = "tom";
		}

		$_SESSION['Navn'] = $Navn;
		$_SESSION['Email'] = $Email;
		
		$TLF = str_replace(" ", "", $TLF);
			
		$_SESSION['Opptak'] = true;

		$sql="INSERT INTO Opptak (Email, Navn, Begrunnelse, Egenskaper, Timer, Annet, TLF) VALUES ('$Email', '$Navn', '$Begrunnelse', '$Egenskaper', '$Timer', '$Annet', '$TLF')";
		$result=mysql_query($sql);
		mysql_close();
		
		echo
		"
		<!-- Modal -->
		<!-- Modal -->
		<div id='myModal' class='modal hide fade' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
		<div class='modal-header'>
		<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
		<h3 id='myModalLabel'>Takk!</h3>
		</div>
		<div class='modal-body'>
		<p>Hei, <b>"; 
					echo $_SESSION['Navn'];
					echo "</b>. Vi har registrert din søknad med følgende e-postadresse: <b>";
					echo $_SESSION['Email'];
					echo "</b>. Vi vil svare på din søknad etter at søknadsfristen er ute. Opplevde du noen problemer underveis, ta kontakt med bjornasm [at] stud.ntnu.no</p>
		</div>
		<div class='modal-footer'>
		<button class='btn' data-dismiss='modal' aria-hidden='true'>Lukk</button>
		</div>
		</div>
		
		
		
		";
	}
	?>
	<script>$('#myModal').modal('show')</script>
	</body>
</html>
