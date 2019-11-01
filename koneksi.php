<?php 

$db = new mysqli("localhost","root","","11rpl1_db");

	if (mysqli_connect_errno()) {
		echo "Error : " . mysqli_connect_error();
	}

?>