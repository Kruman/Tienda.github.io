<?php
function conn(){
	$hostname = "localhost";
	$usuariodb = "root";
	$passwordddb = "";
	$dbname = "tienda";


	$conectar = mysqli_connect($hostname, $usuariodb, $passwordddb, $dbname);
	return $conectar;
} 
 ?>