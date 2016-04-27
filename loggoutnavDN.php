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
				<li><a href="#hjem" data-toggle="tab">Hjem</a></li>
				<li><a href="#omoss" data-toggle="tab">Om oss</a></li>
				<li><a href="#kontaktoss" data-toggle="tab">Kontakt oss</a></li>
<li><a href="#DN" data-toggle="tab">DN abonnement</a></li>
				<li><a href="#veldedighet" data-toggle="tab">Veldedighet</a></li>
				<!--<li><a href="#portefoljen" data-toggle="tab">Porteføljen</a></li>-->
				<!--<li><a href="nyhetsbrevet.php">Nyhetsbrev</a></li>-->
			</ul>
			<?php if (!$_SESSION['loggedin']){
			echo	"<ul class='nav pull-right'>
				<li><a href='#logginn' data-toggle='tab'>
					Logg inn
					</a>
				</li>
			</ul>";}
			elseif ($_SESSION['loggedin']){
						echo "<ul class='nav pull-right'>
				
				<li><a href='bibliotek.php' target='_blank'>Bibliotek</a></li>
				<li><a href='#profil' data-toggle='tab'>Din profil</a></li>
				<li><a href='logout.php'>
					Logg ut
					</a>
				</li>
			</ul>";}?>
		</div><!--/.nav-collapse -->
	</div><!-- /.navbar-inner -->
</div><!-- /.navbar navbar-inverse -->

<!-- Egen fane som heter porteføljen -->

