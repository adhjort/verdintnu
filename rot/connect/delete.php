<?php
	session_start();
	INCLUDE 'connect/base.php';// Connect to server and select database.
	$tbl_name = 'nyheter';
	$id = $_POSt['id'];
	$sql="DELETE * FROM nyheter WHERE id = '$id'";
	$result=mysql_query($sql);
	//mysql_close();
	
	echo '<script type="text/javascript">window.location.replace("http://www.verdintnu.no/") </script>';
	
	
	exit;

?>