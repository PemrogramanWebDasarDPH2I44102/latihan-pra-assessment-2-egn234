<?php
	include('koneksi.php');
	session_start();
	$nip = $_SESSION['nip'];

	if (isset($_POST['create'])) {
		$sasaran = $_POST['sasaran'];
		$isipaket = $_POST['paket'];
		$input = mysqli_query($db, "INSERT INTO paket(tgl_datang, sasaran, penerima, isi_pkt) VALUES (now(), '$sasaran', '$nip', '$isipaket')");
		header('Location: viewpaket.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="createpaket.php">
		<table>
			<tr>
				<td>isi paket</td>
				<td>:</td>
				<td><input type="text" name="paket"></td>
			</tr>
			<tr>
				<td>Sasaran penghuni</td>
				<td>:</td>
				<td>
					<select name="sasaran">
						<option value="null"> </option>
						<?php
							$penghuni = mysqli_query($db, "SELECT noktp FROM penghuni");
							$row = mysqli_fetch_assoc($penghuni);

							foreach ($penghuni as $key) {
								echo "<option value='".$key['noktp']."'>".$key['noktp']."</option>";
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="3"><button type="submit" name="create">BUAT</button></td>
			</tr>
		</table>
	</form>
</body>
</html>