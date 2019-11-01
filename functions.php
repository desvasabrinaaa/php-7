<?php 

$db = new mysqli("localhost","root","","11rpl1_db");
	if (mysqli_connect_errno()) {
		echo "Error : " . mysqli_connect_error();
	}

function Insert($data)
{
	global $db;

	$nis = $data["nis"];
	$nama = $data["nama"];
	$jk = $data["jk"];
	$tmp_lahir = $data["tmp_lahir"];
	$tgl_lahir = $data["tgl_lahir"];
	$alamat = $data["alamat"];
	$no_hp = $data["no_hp"];

	$query = "INSERT INTO siswa VALUES
				('','$nis','$nama','$jk','$tmp_lahir', '$tgl_lahir', '$alamat', '$no_hp', NOW())";

	if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
	} else {
    echo "Error: " . $query . "<br>" . $conn->error;
	}

$conn->close();
}

?>  