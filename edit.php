<?php
	include('koneksi.php');
	$edit = $_GET['id'];
	session_start();
	$nip = $_SESSION['nip'];
	$_SESSION['edit'] = $edit;
	
	$hasil = mysqli_query($db, "SELECT * FROM paket WHERE id = '$edit';");

	if (isset($_POST['ngedit'])) {
		$tglambil = $_POST['tgl_ambil'];
		$res = mysqli_query($db, "UPDATE paket SET tgl_ambil = '$tglambil' WHERE id = '$edit'");
		header('location: viewpaket.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="edit.php">
		<table>
			<tr>
				<td>tanggal ambil</td>
				<td>:</td>
				<td><input type="date" name="tgl_ambil"></td>
			</tr>
			<tr>
				<td><button type="submit" name="ngedit">UBAH</button></td>
			</tr>
		</table>
	</form>
</body>
</html>