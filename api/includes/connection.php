<?php 
	$connection = mysql_connect("localhost","root","chiru") or die("DataBase Connection encountered a problem"  . mysql_error());
	$db_select = mysql_select_db("chemclave",$connection) or die("DataBase selection Problem" . mysql_error());
?>