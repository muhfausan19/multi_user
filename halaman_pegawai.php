<!DOCTYPE html>
<html>
<head>
	<title>Halaman pegawai  </title>
</head>
<body>
	<?php
		session_start();


		if($_SESSION['level']=="") {
			header("location:index.php?pesan=gagal");
		}
	?>

	<h1>Halaman pegawai</h1>
	<p>halo <b> <?php echo $_SESSION['username']; ?> </b> anda telah login sebagai <b> <?php echo $_SESSION['level']; ?></b> </p>
	<a href="logout.php">LOGOUT</a>
</body>
</html>