<?php 
	session_start();
	INCLUDE 'rot/connect/base.php';// Connect to server and select database.
	$navn = utf8_decode(mysql_real_escape_string($_POST['navn']));
	$etternavn = utf8_decode(mysql_real_escape_string($_POST['etternavn']));	
	$brukernavn = mysql_real_escape_string($_POST['brukernavn']);
	$avgangsar = mysql_real_escape_string($_POST['avgangsar']);
	$arbeidsgiver = utf8_decode(mysql_real_escape_string($_POST['arbeidsgiver']));
	$telefonnummer = mysql_real_escape_string($_POST['telefonnummer']);
	$epost = mysql_real_escape_string($_POST['epost']);
	$alumni = $_POST['alumni'];
	$kode = $_POST['kode'];
	
$telefonnummer = str_replace(" ", "", $telefonnummer);
		
	
	if ($kode == 'wallstreet'){
	$login = true;
	$sql="INSERT INTO medlemmer (navn, brukernavn, etternavn, arbeidsgiver, avgangsaar, alumni, telefonnummer, epost) VALUES ('$navn', '$brukernavn', '$etternavn', '$arbeidsgiver', '$avgangsar', '$alumni', '$telefonnummer', '$epost')";
	$result=mysql_query($sql);
	mysql_close();
	}
	else {$login = false;}
?>