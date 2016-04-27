<?php
session_start();?>
﻿<div class="navbar navbar-inverse">
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
				<li><a href="#opptak" data-toggle="tab">Opptak</a></li>
				<li><a href="#kontaktoss" data-toggle="tab">Kontakt oss</a></li>
				<li><a href="#veldedighet" data-toggle="tab">Veldedighet</a></li>
				<li><a href="nyhetsbrevet.php" data-toggle="tab">Nyhetsbrev</a></li>
			</ul>
			<ul class="nav pull-right">
				<li><a href="bibliotek.php?data=<?php echo $data; echo '&'; echo 'aar='; echo $_SESSION['info']['avgangsaar']; ?>" target="_blank">Bibliotek</a></li>
				<li><a href="#profil" data-toggle="tab">Din profil</a></li>
				<li><a href='logout.php'>
					Logg ut
					</a>
				</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div><!-- /.navbar-inner -->
</div><!-- /.navbar navbar-inverse -->
