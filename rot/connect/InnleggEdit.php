<?php
	session_start();
	INCLUDE 'connect/base.php';// Connect to server and select database.
	$tbl_name = 'nyheter';
	$forfatter = mysql_real_escape_string($_POST['forfatter']);
	$historie = mysql_real_escape_string($_POST['historie']);
	$tittel = mysql_real_escape_string($_POST['tittel']);
	$id = $_SESSION['id'];
	echo $id;
	//$dato = ('DATE: Auto CURDATE()', CURDATE() );
	$sql="UPDATE nyheter SET forfatter = '$forfatter' AND historie = '$historie' AND tittel = '$tittel' WHERE id = '$id'";
	$result=mysql_query($sql);
	//mysql_close();
	
	//echo '<script type="text/javascript">window.location.replace("http://www.verdintnu.no/") </script>';
	
	
	exit;

?>