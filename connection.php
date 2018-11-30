<?php
session_start();
$server='localhost';
$username='root';
$password='';
$database='translate';
$con=mysql_connect($server,$username,$password,$database);	
mysql_select_db('translate');	

if(!$con)
	die("can not connect to the database $database on the server $server");

?>