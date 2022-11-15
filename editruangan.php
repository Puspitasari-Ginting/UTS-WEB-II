<!doctype HTML>
<html>
<head>
	<title>Edit Ruangan</title>
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
				<li class="alt"><a href="tampil-mhs.php">Data Mahasiswa<span class="sr-only">(current)</span></a></li>
				<li class="dropdown">
				<li class="active"><a href="ruangan.php">Data Ruangan<span class="sr-only">(current)</span></a></li>
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
				<h3> Edit Data Ruangan</h3>
				<form action="proses-editruangan.php" method="POST">
					<?php
					$kode_ruangan=$_GET['kode_ruangan'];
					include "koneksi.php";
					$tampil=$koneksi->query("select * from ruangan where kode_ruangan ='$kode_ruangan' ");
					$row=$tampil->fetch_assoc();
					?>
					<div class="form-group">
						<label for="kode_ruangan">Kode Ruangan</label>
						<input type="number" name="kode_ruangan" value="<?php echo $row['kode_ruangan']?>" class="form-control">
					</div>

					<div class="form-group">
						<label for="nama_ruangan">Nama Ruangan</label>
						<input type="text" name="nama_ruangan" value="<?php echo $row['nama_ruangan']?> "class="form-control">
					</div>
	
					<div class="form-group">
						<label for="jumlah_kursi">Jumlah Kursi</label>
						<input type="number" name="jumlah_kursi" value="<?php echo $row['jumlah_kursi']?>" class="form-control">
					</div>
					
					<div class="form-group">
						<label for="jumlah_meja">Jumlah Meja</label>
						<input type="number" name="jumlah_meja" value="<?php echo $row['jumlah_meja']?>" class="form-control">
					</div>
					<div class="form-group">
						<label for="jumlah_ac">Jumlah AC</label>
						<input type="number" name="jumlah_ac" value="<?php echo $row['jumlah_ac']?>" class="form-control">
					</div>
					<div class="form-group">
						<label for="jumlah_proyektor">Jumlah Proyektor</label>
						<input type="number" name="jumlah_proyektor" value="<?php echo $row['jumlah_proyektor']?>" class="form-control">
					</div>
					<div class="form-group">
						<label for="jumlah_lampu">Jumlah Lampu</label>
						<input type="number" name="jumlah_lampu" value="<?php echo $row['jumlah_lampu']?>" class="form-control">
					</div>
					<input type="submit" name="kirim" value="Edit" class="btn btn-success">
					

		<script src="bootstrap/js/jQuery.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html> 