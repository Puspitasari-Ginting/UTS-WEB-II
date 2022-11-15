<!doctype HTML>
<html>
<head>
	<title>INPUT MAHASISWA</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse">
	<div class="container">
	<div class="row">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle Nav</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a href ="index2.php" class="navbar-brand"><strong>Merdeka Campus</strong></a>
		</div>
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
				<li class="active"><a href="tampil-mhs.php">Data Mahasiswa<span class="sr-only">(current)</span></a></li>
				<li class="dropdown">
				<li class="alt"><a href="ruangan.php">Data Ruangan<span class="sr-only">(current)</span></a></li>
				<li class="dropdown">
				</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Admin <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
			</ul>
		</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3> Input Data Mahasiswa</h3>
				<form action="proses-inputmhs.php" method="POST">
					<div class="form-group">
						<label for="nim">NIM</label>
						<input type="number" name="nim" class="form-control">
					</div>

					<div class="form-group">
						<label for="nama">NAMA</label>
						<input type="text" name="nama" class="form-control">
					</div>
	
					<div class="form-group">
						<label for="jenis_kelamin">JENIS KELAMIN</label>
						<select name="jenis_kelamin" class="form-control">
						<option value="Laki-Laki">Laki-Laki</option>
						<option value="Perempuan">Perempuan</option>
						</select>
					</div>

					<div class="form-group">
						<label for="alamat">alamat</label>
						<textarea name="alamat" class="form-control">
						</textarea>
					</div>

					<input type="submit" name="kirim" value="Simpan" class="btn btn-success">
					<input type="reset" name="kosongkan" value="kosongkan" class="btn btn-danger">

		<script src="bootstrap/js/jQuery.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html> 