<?php
	include('koneksi.php');

	if (isset($_POST['submitlog'])) {
		$nama = $_POST['nama']; 
		$nip = $_POST['nip']; 

		$result = mysqli_query($db, "SELECT * FROM karyawan where nama = '$nama'");
		$row = mysqli_fetch_assoc($result);
		if($nama == $row['nama'] && $nip == $row['nip']){
			session_start();
			$_SESSION['nip'] = $nip;
			header('Location: halamanawal.php');
		}
		elseif (count($row['nama']) == 0) {
			echo "nama tidak ada";
		}
		else{
			echo 'nip salah';
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>LOGIN</h1>
	<form method="POST" action="login.php">
		<table>
			<tr>
				<td>nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>nip</td>
				<td>:</td>
				<td><input type="text" name="nip"></td>
			</tr>
			<tr>
				<td colspan="3"><button type="submit" name="submitlog">SIGN IN</button></td>
			</tr>
		</table>
	</form>

</body>
</html>