 <?php

$nim=$_POST['nim'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];

include "koneksi.php";

$simpan=$koneksi->query("insert into mahasiswa (nim,nama,jenis_kelamin,alamat)
						values('$nim', '$nama', '$jenis_kelamin', '$alamat')");

if($simpan==true){

	header("location:tampil-mhs.php?pesan=inputberhasil");
} else{
	echo "Eror";
}

?> 