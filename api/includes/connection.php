<?php 
	$connection = mysql_connect("localhost","root","a");
	if (!$connection){
		die("DataBase Connection encountered a problem"  . mysql_error());
	}
	$db_select = mysql_select_db("chemclave",$connection);
	if (!$db_select){
		die("DataBase selection Problem" . mysql_error());
	}
	

?>