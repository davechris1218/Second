<?php
	$host="localhost";
	$user="nagax21";
	$pass="Fiorenasitalia1234";
	$database="sample";
	$koneksi=new mysqli($host,$user,$pass,$database);
	if (mysqli_connect_errno()) {
	  trigger_error('Failed to connect database: '  . mysqli_connect_error(), E_USER_ERROR); 
	}
?>
