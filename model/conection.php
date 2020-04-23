<?php

function getConn(){

	$mysqli = mysqli_connect('ec2-52-6-143-153.compute-1.amazonaws.com', 'hpvbatemnrkwkq', '20c371f668e4e654567466ad6d91c7e481b17ed494162440ef9a91e9512597c1', 'd8718tb62vovh0');
	if (mysqli_connect_errno($mysqli)) 
		echo "Fallo al Conectar a MSQL. " . mysqli_connect_errno();
	$mysqli->set_charset('utf8');
	return $mysqli;

}

