<?php
INCLUDE 'rot/connect/base.php';

$query = "SELECT * FROM medlemmer WHERE alumni != 'Ja' ORDER BY navn ASC"; 

$result = mysql_query($query) or die(mysql_error());

$query = "SELECT COUNT(navn) FROM medlemmer WHERE alumni != 'Ja'";
$antall = mysql_query($query) or die(mysql_error());
$res = mysql_fetch_array($antall);
$antall = $res['COUNT(navn)'];
$i = 0;
while($row = mysql_fetch_array($result)){
	$i = $i+1;
    echo utf8_encode($row['navn'])." ". utf8_encode($row['etternavn']);
	if ($i < $antall){
	echo ", ";}
	else {
	echo ".";
	}
}
?>
