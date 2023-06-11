<?php  

	//connecting to database

	$conn = mysqli_connect("localhost", "root", "", "lsm");

	if (!$conn) {
		// code...
		echo "error in connection". mysqli_connect_error();
	}






?>