<?php

$hostname = "localhost" ;
$uname = "root" ;
$pwd = "" ;
$dbname = "karate_db";

$mysqli = mysqli_connect($hostname,$uname,$pwd,$dbname ) or die ("connection failed") ;

error_reporting(E_ALL ^ E_WARNING);
?>