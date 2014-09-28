<?php
// Database config
$host = "localhost"; // Your database host, normaly localhost
$user = "root"; // Database username
$password = "###"; // Your database password
$database = "###"; // The name of the database on your server




mysql_connect($host, $user, $password) or die(mysql_error()); 
mysql_select_db($database) or die(mysql_error()); 

?>