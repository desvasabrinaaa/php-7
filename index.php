<?php

include 'koneksi.php';

?>

<h1>DAFTAR SISWA XI RPL 1 SMKN 1 SUBANG</h1>
<a href="siswa_tambah.php">TAMBAH DATA</a>
<br><br>

<table border="1" cellpadding="10px" cellspacing="0">
	<thead>
		<tr>
			<th>NO</th>
			<th>NIS</th>
			<th>NAMA</th>
			<th>JENIS KELAMIN</th>
			<th>TEMPAT LAHIR</th>
			<th>TANGGAL LAHIR</th>
			<th>ALAMAT</th>
			<th>NO HP</th>
			<th>TANGGAL ENTRI</th>
			<th>AKSI</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$sql = " SELECT * FROM siswa ORDER BY tgl_lahir DESC;"; //Query SQL
		$result = $db->query($sql); // Execute Query SQL
		$no = 1;
		while ($row = $result->fetch_assoc()) { //Menampilkan bentuk array
			echo "
			<tr>
				<td>". $no ."</td>
				<td>". $row["nis"] ."</td>
				<td>". $row["nama_lengkap"] ."</td>
				<td>". $row["jk"] ."</td>
				<td>". $row["tmp_lahir"] ."</td>
				<td>". $row["tgl_lahir"] ."</td>
				<td>". $row["alamat"] ."</td>
				<td>". $row["no_hp"] ."</td>
				<td>". $row["tanggal_entri"] ."</td>
				<td>
					<a href='siswa_edit.php?id=".$row["id_siswa"]."' >EDIT</a> - 
					<a href='siswa_hapus.php?id=".$row["id_siswa"]."'
					onclick='return confirm (\"yakin dihapus?\");'>DELETE</a>
				</td>
			</tr>
			";
			$no++;
		} 
	?>
	</tbody>
</table>