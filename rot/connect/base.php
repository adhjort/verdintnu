<?php
$host="verdintnu.mysql.domeneshop.no"; // Host name 
$username="verdintnu"; // Mysql username 
$password="60rd0n63CK0redHar03"; // Mysql password 
$db_name="verdintnu"; // Database name 

mysql_connect($host, $username, $password) or die("MySQL Error: " . mysql_error());  
mysql_select_db($db_name) or die("MySQL Error: " . mysql_error());  

