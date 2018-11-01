<?php
	include('koneksi.php');
	session_start();
	$nip = $_SESSION['nip'];
	$result = mysqli_query($db, "SELECT * FROM karyawan where nip = '$nip'");
	$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2> Selamat datang, <?php echo $row['nama']?> </h2>

	<a href="createpaket.php">BUAT PAKET BARU</a><br>
	<a href="viewpaket.php">LIHAT PAKET</a><br>
	<a href="createpenghuni.php">BUAT DATA PENGHUNI</a><br>
</body>
</html>