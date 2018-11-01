<?php
	$db = mysqli_connect('localhost', 'root', '', 'prases');

	if (!$db) {
		echo 'database tidak terkoneksi';
	}
?>