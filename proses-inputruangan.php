 <?php

$kode_ruangan=$_POST['kode_ruangan'];
$nama_ruangan=$_POST['nama_ruangan'];
$jumlah_kursi=$_POST['jumlah_kursi'];
$jumlah_meja=$_POST['jumlah_meja'];
$jumlah_ac=$_POST['jumlah_ac'];
$jumlah_proyektor=$_POST['jumlah_proyektor'];
$jumlah_lampu=$_POST['jumlah_lampu'];

include "koneksi.php";

$simpan=$koneksi->query("insert into ruangan (kode_ruangan,nama_ruangan,jumlah_kursi,jumlah_meja,jumlah_ac,jumlah_proyektor,jumlah_lampu)
						values('$kode_ruangan', '$nama_ruangan', '$jumlah_kursi', '$jumlah_meja','$jumlah_ac','$jumlah_proyektor','$jumlah_lampu')");

if($simpan==true){

	header("location:ruangan.php?pesan=inputberhasil");
} else{
	echo "Eror";
}

?>