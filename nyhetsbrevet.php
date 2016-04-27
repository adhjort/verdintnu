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
					<li><a href="http://verdintnu.no/#hjem">Hjem</a></li>
				<li><a href="http://verdintnu.no/#omoss">Om oss</a></li>
				<li><a href="http://verdintnu.no/#opptak">Opptak</a></li>
				<li><a href="http://verdintnu.no/#kontaktoss">Kontakt oss</a></li>
				<li><a href="http://verdintnu.no/#veldedighet">Veldedighet</a></li>
				<li><a href="http://verdintnu.no/#portefoljen">Porteføljen</a></li>
				<li><a href="nyhetsbrevet.php"><b>Nyhetsbrev</b></a></li>
			</ul>
			<ul class="nav pull-right">
				<li><a href='#logginn' data-toggle="tab">
					Logg inn
					</a>
				</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div><!-- /.navbar-inner -->
</div><!-- /.navbar navbar-inverse -->

<!-- Egen fane som heter porteføljen -->


				</div> <!-- /.mastheat -->
			</div> <!-- /.container -->
		</div> <!-- /.navbar wrapper -->
		
		<div class="container">
			<div class="nyhetsbrev">
<div class="alert alert-success">
<div class="row">
	<div class="span1">
	</div>
	<div class="span8">
					<h1>Nyhetsbrev Verdi NTNU</h1>
					<p class="lead">Mars 2013</p>
					<br>

					<h3>Veldedighetsfondets utvikling</h3>
					<p>
					Mot slutten av fjoråret valgte vi å selge oss ut av alle posisjoner for å starte med «blanke ark»
					på nyåret. Motivasjonen for å gjøre dette hang sammen med omstruktureringene organisasjonen
					gikk gjennom i fjor høst.</p>
					<p>
					Oppbyggingen av en ny portefølje er i full gang, og per dags dato har vi posisjoner i følgende tre
					selskap notert på Oslo Børs/Oslo Axess:</p>
					                             
<table class="table table-hover">
              <thead>
                <tr>
                  <th>Aksje</th>
                  <th>Anskaffelsesdato</th>
                  <th>Kursmål (NOK)</th>
                  <th>GA-kurs (NOK)</th>
		  <th>Avkastning (%)</th>	
                </tr>
              </thead>
              <tbody>
                <tr class="error">
                  <td>Farstad Shipping</td>
                  <td>14.02.2013</td>
                  <td>237</td>
                  <td>138,29</td>
		  <td class ="warning">-4,55</td>	
                </tr>
                <tr class="info">
                  <td>Hõegh LNG Shipping</td>
                  <td>07.03.2013</td>
                  <td>62</td>
                  <td>49,90</td>
		  <td class ="success">1,71</td>	
                </tr>
                <tr class="info">
                  <td>Prospector Offshore Drilling</td>
                  <td>28.02.2013</td>
                  <td>21</td>
                  <td>14,85</td> 
		  <td class="success">3,28</td>
                </tr>
              </tbody>
            </table>
			<p>
					<i>*57% av fondets midler er for tiden i kontanter</i></p> 
					<div class="row">
						<div class="span8">
						<br>
						<div class="span4">
						<div class="span3">
						<img src="http://www.smp.no/nyheter/article7112855.ece/ALTERNATES/w980-default/15farstad.jpg" class="img-polaroid">
						</div>
					</div><h4>
						Farstad Shipping (FAR)
						</h4><br>
						<p>
						AHTS-segmentet lukrativ grunnet vedvarende høy oljepris, forventet økt aktivitet på
						Norsk sokkel, økende politisk velvilje og iboende fartøysfleksibilitet.
						Historisk lav på P/B, P/NAV og EV/EVIT og har underperformet peers det siste året
						Lavest multipler av peers på EV/EBIT og EV/EBITDA
						God timing for å investere; har for vane å gjøre det bra frem mot sommeren
						Størst eksponering mot AHTS hvilket har bedre utsikter en det pressede PSV-segmentet
						Analytikernes forventer en kraftig økning i AHTS spotpriser i nordsjøen.
						</p>
						<p>
						Kursmål på kr 237 utifra relativ verdesettelse (EV/EBITDA). Tidshorisont på 6 mnd = selge etter
						forhåpentligvis lukrativ sommer.
						</p>
						</div>
					</div>
					<br>
					<div class="span4">
						<div class="span3">
						<img src="http://static.lngworldnews.com/wp-content/uploads/2012/10/Hoegh-LNG-of-Norway-Orders-New-FSRU-from-HHI.jpg" class="img-polaroid">
						</div>
					</div>
					<h4>
					Höegh LNG Holdings (HLNG)
					</h4><br>
					<p>
					Höegh LNG tilbyr flytende LNG (liquefied natural gas) infrastrukturtjenester under langsiktige
					kontrakter. Selskapet har åtte fartøy, hvorav seks er tradisjonelle LNG-transportskip og to er
					FSRU-skip. Höegh LNG er en ledende aktør innenfor FSRU-segmentet, og har ytterligere
					fire skip i bestilling som leveres I perioden fram til 2015. Posisjonen til Höegh LNG i FSRU-
					markedet anses som meget attraktiv, ettersom det er forventet sterk vekst innenfor dette
					segmentet. Aksjen har vært noe nedtrykt grunnet frykt for EK-emisjon, noe som nå syntes
					mindre sannsynlig, og aksjen er blant annet pga dette noe lavt priset. Vi anser Höegh LNG som
					en ”trygg” aksje ettersom de har lange kontrakter med trygge motparter, gode lånebetingelser og
					en sterk og kompetent ledelse.
					</p>
					<p>
					Kursmålet er fastsatt på bakgrunn av en DCF-verdsettelse.
					</p>
					
					<br>
					<div class="span4">
						<div class="span3">
						<img src="http://multimedia.dn.no/archive/00240/LB_Prospector_Offsh_240582c.jpg" class="img-polaroid">
						</div>
					</div><h4>
					Prospector Offshore Drilling (PROS)
					</h4><br>
					<p>PROS er et riggselskap som har fire JU-rigger under konstruksjon. Riggene leveres
					henholdsvis i Q3 og Q4 inneværende år, og to i 2014. Selskapet har i tillegg opsjoner på
					konstruksjon av til sammen seks rigger. Opsjonene på tre av riggene utløper 31.03.2013
					og opsjonene på de resterende tre utløper 30.06.2013.</p>
					<br>
					<p>
					Verdi forventer fortsatt høy boreaktivitet i Nord-Europa, og økende etterspørsel etter JU-
					rigger i årene fremover.</p>
					<p>
					Mange nybygg er på vei inn på markedet, men vi forventer at eldre rigger etter hvert vil
					skrapes og at effekten av mange nybygg dermed vil reduseres.
					</p>
					<p>
					PROS har kontrakt med TOTAL på den første av sine av sine rigger. Opprinnelig skulle
					riggen begynt arbeidet i juni måned, men på grunn av utsatt levering på riggen vil ikke
					PROS kunne starte innenfor det avtalte oppstartsvinduet. Vi forventer at TOTAL velger
					å beholde avtalen med PROS, og at riggen vil starte på kontrakten så snart den er klar. Vi
					forventer en oppdatering rundt dette i løpet av de neste par månedene.</p>
					<p>
					Andre triggere er melding om kontrakt og/eller bankfinansiering på riggen som skal
					leveres i Q4, eller melding om utøvelse av opsjoner på nybygg.
					Selskapet har store kontantreserver etter en emisjon og salg av to rigger i fjor høst, men vi
					forventer at selskapet vil måtte hente inn mer egenkapital i forbindelse med levering av de
					to riggene som har levering i løpet av 2014.
					Ved å legge en implisitt markedsverdi per rigg på 230mUSD til grunn har vi et kursmål
					på 21 kroner per aksje, med en tidshorisont på ett år.</p>
					

					<h3>Nordnet forvalterkonkurranse</h3>
					<p>
					Verdi deltar som utfordrer i Nordnets konkurranse ”Ekspertene og utfordrerne”. Vi forvalter
					en portefølje på 100.000 kr og skal forsøke å slå proffene på deres egen hjemmebane. I tillegg
					konkurrerer vi selvsagt mot de andre utfordrerne som er studentforeninger ved NHH, BI, UiA
					og TØH. Vi har hittil valgt å sette en del av porteføljen i store og stabile selskaper, noe som har
					resultert i en liten nedgang i porteføljen. Resten har vi investert ut fra en momentum-strategi, som
					vil si at vi forsøker å finne selskaper som er inne i en god trend og som vi satser på vil fortsette
					den gode utviklingen. Følg utviklingen på porteføljen vår <a href="https://www.nordnet.no/mux/web/analys/experterna/expert/innehav.html?expert=VERDI" target="_blank">her</a>.</p>

					<h3>Arrangement i regi av Verdi NTNU</h3>
					<p>
					Første foredrag i regi av Verdi NTNU dette semesteret ble holdt av Lars Rimmereid. Rimmereid kommer fra Arkwright, et konsulentselskap med kontor i Oslo. Under foredraget fikk de i overkant 50 fremmøtte innblikk i Private Equity-bransjen, hvordan man her jobber ved sine kunder og hvordan verdiskapningen foregår. En heldig quizvinner stakk også av med et Bose headsett fra Arkwright.</p>
<p>
Semesterets andre foredrag ble holdt 13. mars av Svein Harald Øygard som er svært anerkjent innen finansbransjen. Han kan blant annet vise til sin tidligere stilling som sentralbanksjef på Island der han var en stor bidragsyter når det gjaldt å få landets økonomi på bena igjen etter finanskrisen. </p> <p>Rundt 150 fremmøtte fikk en grundig gjennomgang av Norges makrostiuasjon, hvor en rekke makroøkonomiske faktorer i Norge ble sammenlignet med andre relevante land. I tillegg kunne Svein Harald Øygard gi sin vurdering av tiden som Islands sentralbanksjef, og hva som måtte til for å snu den økonomiske situasjonen i landet.</p>
 
<p>
Finansdagen Trondheim, hvor Verdi er medarrangør, ble en stor suksess høsten 2012. Vi hadde 500 deltakere på Royal Garden Hotel. Blant foredragsholderne var Trygve Hegnar, Peter Warren og Harald Magnus Andreassen. Arbeidet med Finansdagen 2013 er allerede i gang og tentativ dato er 7. november. Vi gleder oss!
</p>
				
					<h3>Nye websider</h3>
					<p>Det jobbes for tiden med de nye websidene til Verdi, dette kan medføre at sidene er noe ustabile til tider. Vi er veldig fornøyde med det nye designet,
					som dere kan se nå. Blant annet jobbes det med internsidene for medlemmer og Verdialumni.</p>

					<h3>
					Spennende karrieremuligheter i SEB</h3>
					<p>
					We are looking for graduates who have the potential, passion and desire to become future leaders
					within SEB to join our Trainee Programme in Oslo, starting September 2013.
					</p>
					<p>
					You will be joining Markets, a unit within Merchant Banking responsible for Sales and Risk
					Management of Equities, Fixed Income, Foreign Exchange, Commodities and Structured
					Derivatives. Business operations are conducted from offices in Stockholm, Copenhagen,
					Frankfurt, Helsinki, Hong Kong, London, New York, Shanghai, Singapore and Oslo, and during
					the traineeship you will get a month-long international internship at one of these offices.
					</p>
					<p>
					Read more about SEB's Trainee Programme at sebgroup.com/trainee.
					</p>
					<p>
					The application periode is 18 February - 17 March
					</p>
					<h4>SEB søker etter trainees</h4>
					<br>
					<p>Marius Lømo er Head of FX Sales & Commodities, og han søker nå etter to trainees til SEB i Oslo. Her kan du høre litt om hvordan det er å jobbe på Markets i SEB, og hva han ser etter når han skal ansette nye, unge medarbeidere.
SEB søker trainees i flere land, se stillingsannonser og les mer på <a href="http://sebgroup.com/trainee">sebgroup.com/trainee</a>.
Søknadsfristen er 17. mars 2013.</p>
					<div class="center">
					<iframe width="560" height="315" src="http://www.youtube.com/embed/JB4DUyBz7wY?rel=0" frameborder="0" allowfullscreen></iframe>
					</div>

					<br>
					<br>
					<br>
					<div class="row">
						<div class="span4">
							<a href="http://www.dn.no/talent/quiz/" target="_blank"><img src="/assets/img/dnquiz.png" class="img"></a>
						</div>
						<div class="span4">
							<h4>DN nyhetsquiz</h4>
							<p>
							Er du oppdatert på den siste ukens næringslivsnyheter? Ta Dagens Næringslivs nettbaserte
					quiz! Konkurrer mot andre skoler og vinn fine premier!</p><p><a href="http://www.dn.no/talent/quiz/">dn.no/talent/quiz/</a></p>
						</div>
					</div>
					<br>
					<br>
					<br>
					
					<div class="row">
						<div class="span6">
							<h4>SKAGEN Lite</h4>
							<p>
							Bloggen SKAGEN Lite er for deg som enten studerer, er i arbeid, eller har noen spørsmål
							om økonomi og læring. På bloggen skrives det om temaer som sparing, investering og
							studentøkonomi.</p><p><a href="http://blogg.skagenfondene.no/">blogg.skagenfondene.no</a></p>
						</div>
						<div class="span2">
							<a href="http://blogg.skagenfondene.no" target="_blank" ><img src="/assets/img/SkagenBlogg.png" class="img"></a>
						</div>
					</div>
					<br>
					<br>
		</div>
	</div>
</div> <!-- row -->
</div>
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
window.location.href = "http://verdintnu.no/nyhetsbrevIE.php";
<![endif]-->
</script>