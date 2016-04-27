<?php 
session_start();
INCLUDE 'loggedincheck.php';
INCLUDE 'rot/connect/base.php';
$navn = utf8_decode(mysql_real_escape_string($_POST['navn']));
$etternavn = utf8_decode(mysql_real_escape_string($_POST['etternavn']));	
$brukernavn = mysql_real_escape_string($_POST['brukernavn']);
$avgangsar = mysql_real_escape_string($_POST['avgangsar']);
$arbeidsgiver = utf8_decode(mysql_real_escape_string($_POST['arbeidsgiver']));
$telefonnummer = mysql_real_escape_string($_POST['telefonnummer']);
$epost = mysql_real_escape_string($_POST['epost']);
$alumni = $_POST['alumni'];

$telefonnummer = str_replace(" ", "", $telefonnummer);
$sql="UPDATE medlemmer SET navn = '$navn', etternavn = '$etternavn', arbeidsgiver = '$arbeidsgiver', avgangsaar = '$avgangsar', alumni = '$alumni', telefonnummer = '$telefonnummer', epost = '$epost' WHERE brukernavn = '$brukernavn'";
$result=mysql_query($sql);
mysql_close();


echo "<meta http-equiv='refresh' content='0;url=http://www.verdintnu.no/?data={$data}&sign={$sign}'>";
?>