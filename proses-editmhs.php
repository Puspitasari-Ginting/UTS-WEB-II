<?php

$nim=$_POST['nim'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$id=$_POST['mahasiswa_id'];

include "koneksi.php";

$ubah=$koneksi->query("update mahasiswa set nim='$nim',nama='$nama',jenis_kelamin='$jenis_kelamin',alamat='$alamat' where mahasiswa_id='$id'");

if($ubah==true){

	header("location:tampil-mhs.php?pesan=editberhasil");
} else{
	echo "Eror";
}

?>