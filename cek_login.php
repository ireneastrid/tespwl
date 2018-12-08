<?php
include "../config/koneksi.php";
	// $u = $_POST['username'];
	// $p = $_POST['password'];

// 	if ($u == "admin" && $p == "admin") {
// 		//echo "Anda berhasil login";
// 		//setelah berhasil login redirect ke halaman form nilai
// 		header('location:index.html');
// 	}else {
// 		echo "Username/Password Anda tidak terdaftar";
// 	}

$pass=md5($_POST['password']);
$sql="select * from user where username = '$_POST[username]' and password = '$pass'";

$login=mysqli_query($sql);
$ketemu=mysqli_num_rows($login);
$r=mysqli_fetch_array($login);

if($ketemu > 0) {
	session_start();

	$_SESSION[username]=$r['username'];
	$_SESSION[passuser]=$r['password'];
	$_SESSION[leveluser]=$r['level'];
	header('location:index.php');
	}
else {
	echo "<link href=../config/adminstyle.css row_stylesheet type=text/css";
	echo "<center>Login gagal! username & password tidak benar<br>";
	echo "<a href=.index.php><b>ULANGI LAGI</b></a></center>";
}
?>