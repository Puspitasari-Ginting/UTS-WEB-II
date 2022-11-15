<!doctype HTML>
<html>
<head>
	<title> Data mahasiswa</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/plugins/datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="bootstrap/plugins/datatable/style.css" rel="stylesheet">
<style>
body{
		background-color: #fafafa;
		background-repeat:no-repeat;
		background-size:cover;
}
.navbar-inverse{
		background-color: green;
		font-family: cursive;
}
.navbar-brand{
		font-family: cursive;
}
</style>
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
		<h3>Data Mahasiswa</h3>

<?php

if(@$_GET['pesan']=="inputberhasil"){

?>

		<div class="alert alert-success">
			Data Berhasil di Simpan !
		</div>
<?php
}

?>

<?php

if(@$_GET['pesan']=="hapusberhasil"){

?>

		<div class="alert alert-success">
			Data Berhasil di Hapus !
		</div>
<?php
}

?>
<?php

if(@$_GET['pesan']=="editberhasil"){

?>

		<div class="alert alert-success">
			Data Berhasil di Edit !
		</div>
<?php
}

?>
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="list">					
			<table id="data-table" class="table table-bordered table-striped table-hover js-basic-example">
				<thead>
					<tr>
						<th>Nim</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th>
							<a href ="inputmhs.php">
							<button type="Add" name="btnAdd" class="btn btn-xs btn-info">
							<span class="glyphicon glyphicon-plus"></span>Add
						</button>
					</tr>
				</thead>
<?php

include "koneksi.php";

$sql=$koneksi->query("select * from mahasiswa order by nim ASC");

while($row= $sql->fetch_assoc()){
	?>

		<tr>
			<td><?php echo $row['nim']?> </td>
			<td><?php echo $row['nama']?> </td>
			<td><?php echo $row['jenis_kelamin']?></td>
			<td><?php echo $row['alamat']?></td>
			<td>
				<a href ="dropmhs.php? id=<?php echo $row['mahasiswa_id']?>" onclick="return confirm('Are You Sure Drop This Record?')">
				<button type="trash" name="btndrop" class="btn btn-xs btn-danger">
			<span class="glyphicon glyphicon-trash"></span>Drop
				</button>
				<a href ="editmhs.php?id=<?php echo $row['mahasiswa_id']?>">
			    <button type="trash" name="btnEdit" class="btn btn-xs btn-warning">
			<span class="glyphicon glyphicon-edit"></span>Edit
				</button></td>
		</tr>
<?php
}
?>

</table>
<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/plugins/datatable/jquery.dataTables.js"></script>
<script src="bootstrap/plugins/datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="bootstrap/plugins/datatable/extensions/tables/jquery-datatable.js"></script>
<script src="bootstrap/plugins/datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="bootstrap/plugins/datatable/extensions/export/buttons.flash.min.js"></script>
<script src="bootstrap/plugins/datatable/extensions/export/jszip.min.js"></script>
<script src="bootstrap/plugins/datatable/extensions/export/pdfmake.min.js"></script>
<script src="bootstrap/plugins/datatable/extensions/export/vfs_fonts.js"></script>
<script src="bootstrap/plugins/datatable/extensions/export/buttons.html5.min.js"></script>
<script src="bootstrap/plugins/datatable/extensions/export/buttons.print.min.js"></script>
</body>
</html> 