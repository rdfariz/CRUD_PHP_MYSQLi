<?php
	$server="localhost";
	$username="root";
	$pass="";
	$dbname="6706184127";

	$conn= mysqli_connect($server,$username,$pass,$dbname);
	if(!$conn) {
		die ("Conncetion failed: ".mysqli_connect_error());
	}
	//echo "Connceted Successfully";
?>
