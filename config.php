<?php
	date_default_timezone_set('Asia/Kolkata');
	$mysql_hostname = "localhost";
	$mysql_user = "corwinth_news"; 
	$mysql_password ="CorwinMinds"; 
	$mysql_database = "corwinth_news";
	$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Opps some thing went wrong");
// 	if($con){echo 'pallavi';}

?>