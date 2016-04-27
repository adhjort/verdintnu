<?php 
	if ($_SESSION['loggedin'] == false){
	INCLUDE 'rot/connect/base.php';// Connect to server and select database.
		if ($_GET["data"] and $_GET["sign"] =  'W0rrdZygESfx81ne9018sgBa71IdA4C6oOglhyAXVvLlLq5vhxD5h24TiI%2B%2F6TWvxRg%2BcAh%2FPfIfhBybXvzUO%2BdJ2ZNp4StK8%2FvacLA%2BG8Ucds4TKnCmAG8N63AEFT%2BJ2rBf0QiQmPOtWJ5iglo1Hcf6MTsQe9KKApxsTcztUSE%3D'){
			$sign = $_GET["sign"];
			$data = $_GET["data"]; 
			$_SESSION['data'] = $data;
			$delimiter = ',';
			$dataarray = explode( ',' , $data);
			$username = strtolower($dataarray[5]);
			$sql="SELECT * FROM medlemmer WHERE brukernavn = '$username'";
			$sqlresult = mysql_query($sql);
			$dbinfo = mysql_fetch_array($sqlresult);
			if ($dbinfo['brukernavn'] === $username){
				$_SESSION['loggedin'] = true;
				$_SESSION['info'] = $dbinfo;
			}	
			else {
			$_SESSION['loggedin'] = false;
			}
		}
	}
?>
