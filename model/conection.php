<?php

function getConn(){

	$mysqli = mysqli_connect('localhost', 'root', '', 'lab6');
	if (mysqli_connect_errno($mysqli)) 
		echo "Fallo al Conectar a MSQL. " . mysqli_connect_errno();
	$mysqli->set_charset('utf8');
	return $mysqli;

}

