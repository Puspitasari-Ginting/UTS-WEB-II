<?php
$kode_ruangan=$_POST['kode_ruangan'];
$nama_ruangan=$_POST['nama_ruangan'];
$jumlah_kursi=$_POST['jumlah_kursi'];
$jumlah_meja=$_POST['jumlah_meja'];
$jumlah_ac=$_POST['jumlah_ac'];
$jumlah_proyektor=$_POST['jumlah_proyektor'];
$jumlah_lampu=$_POST['jumlah_lampu'];

include "koneksi.php";

$ubah=$koneksi->query("update ruangan set kode_ruangan='$kode_ruangan',nama_ruangan='$nama_ruangan',jumlah_kursi='$jumlah_kursi',jumlah_meja='$jumlah_meja',jumlah_ac='$jumlah_ac',jumlah_proyektor='$jumlah_proyektor',jumlah_lampu='$jumlah_lampu' where kode_ruangan='$kode_ruangan'");

if($ubah==true){

	header("location:ruangan.php?pesan=editberhasil");
} else{
	echo "Eror";
}

?>