<?php
session_start();
include "koneksi.php";

if(isset($_POST['login']) ) {

	$user = $_POST['username'];
	$pass = $_POST['password'];

	$query = mysqli_query($con, "SELECT * FROM user WHERE username='$user' AND password='$pass' ");

	$cek = mysqli_num_rows($query);

	if($cek > 0) {
		$data = mysqli_fetch_assoc($query);

		if($data['level']=="admin") {

			$_SESSION['username'] = $user;
			$_SESSION['level'] = "admin";

			header("location:halaman_admin.php");

		}else if($data['level']=="pegawai") {

			$_SESSION['username'] = $user;
			$_SESSION['level'] = "pegawai";
			
			header("location:halaman_pegawai.php");
		}else if($data['level']=="pengurus") {

			$_SESSION['username'] = $user;
			$_SESSION['level'] = "pengurus";

			header("location:halaman_pengurus.php");
		}else{

			header("location:index.php?pesan=gagal");
		}
	}else{
		header("location:index.php?pesan=gagal");

	}
}


?>