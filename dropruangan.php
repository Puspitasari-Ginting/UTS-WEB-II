<?php

$kode_ruangan=$_GET['kode_ruangan'];

include"koneksi.php";

$hapus=$koneksi->query("delete from ruangan where kode_ruangan='$kode_ruangan'");

if($hapus==true){

	header("location:ruangan.php?pesan=hapusberhasil");

}else{
	echo"Eror";
}


?>