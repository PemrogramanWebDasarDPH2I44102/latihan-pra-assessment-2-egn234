<?php
	include('koneksi.php');
	session_start();
	$nip = $_SESSION['nip'];
	$view = mysqli_query($db, "SELECT * FROM paket");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>DATA PAKET</h1>
	<form method="POST" action="datamhs.php">
	<table border="1">
		<tr align="center">
			<td>Tanggal Datang</td>
			<td>Sasaran</td>
			<td>Penerima</td>
			<td>Isi Paket</td>
			<td>Tanggal ambil</td>
			<td>Aksi</td>
		</tr>
		<?php
			foreach ($view as $key) {
				echo "<tr><td>".$key['tgl_datang']."</td>";
				echo "<td>".$key['sasaran'].'</td>';
				echo "<td>".$key['penerima'].'</td>';
				echo "<td>".$key['isi_pkt'].'</td>';
				echo "<td>".$key['tgl_ambil'].'</td>';
				echo "<td><a href='edit.php?id=".$key['id']."'>EDIT</a></td><tr>";
			}
		?>
	</table>
	</form>
</body>
</html>