<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h2 >>> Selamat Datang Di Web Admin Campus <<<br></h2>
	<h4>Jl. Medan Kota No. 22 Sumatera Utara</h4>
	<form action="proses-login.php" method="POST">
	<div class="kotak_login">
		<p class="tulisan_login"><b>Login Admin</p></b>
 
		<form>
			<label>Username</label>
			<input type="text" name="username" class="form_login" required placeholder="Isikan Username..">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" required placeholder="Isikan Password ..">
 
			<input type="submit" class="tombol_login" value="Login">
		</form>
</div>
 	<script src="bootstrap/js/jQuery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>