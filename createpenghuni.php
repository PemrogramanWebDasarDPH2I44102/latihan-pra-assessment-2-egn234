<?php
	include('koneksi.php');
	session_start();
	$nip = $_SESSION['nip'];

	if (isset($_POST['buat'])) {
		$nama = $_POST['nama'];
		$unit = $_POST['unit'];
		$noktp = $_POST['noktp'];

		$result = mysqli_query($db, "INSERT INTO penghuni VALUES('$nama', '$unit', 'noktp')");
		header('Location: halamanawal.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="createpenghuni.php">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Unit</td>
				<td>:</td>
				<td><input type="text" name="unit"></td>
			</tr>
			<tr>
				<td>Nomor KTP</td>
				<td>:</td>
				<td><input type="text" name="noktp"></td>
			</tr>
			<tr>
				<td><button type="submit" name="buat">BUAT</button></td>
			</tr>
		</table>
	</form>
</body>
</html>