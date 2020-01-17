<!DOCTYPE html>
<html>
<head>
	<title>Selamat datang di welcome</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1>HALO GAYS!!</h1>

	<?php 
	if (isset($_GET['pesan'])) {
		if ($_GET['pesan']=="gagal") {
			echo "<div class='alert'> Username dan password tidak sesuai !</div>";
		}
	}
	 ?>

	 <div class="kotak_login">
	 	<p class="tulisan_login"><b>Silahkan login</b></p>

	 	<form action="cek_login.php" method="post">
	 		<label><b>Username</b></label>
	 		<input type="text" name="username" class="form_login" placeholder="Username" required="required"><br>
	 		<label><b>Password</b></label>
	 		<input type="password" name="password" class="form_login" placeholder="Password" required="required"><br>
	 		<button type="submit" name="login" class="tombol_login" value="login">Login</button>
	 	</form>

	 </div>
</body>


</html>