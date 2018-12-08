<?php
	$a = mysqli_connect("127.0.0.1","root","") or exit("Gagal Koneksi DB.");
	mysqli_select_db($a,"latihan") or exit("Gagal Memilih DB.");
?>