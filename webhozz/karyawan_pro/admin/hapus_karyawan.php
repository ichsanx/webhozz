<?php
/*
include"koneksi.php";
$nomor_induk=$_GET['nomor_induk'];
$query="Delete from karyawan where nomor_induk='$nomor_induk'";
$simpan=mysqli_query($conn, $query) or die(mysqli_error());
if($simpan){
	echo "<script type='text/javascript'> alert('Anda Ingin Menghapus Data?')
	</script>
	<meta http-equiv='refresh' content='0;url=data_karyawan.php'>
	";}
	else {
		echo "Gagal Hapus";
	}
*/	


include "koneksi.php";

$nomor_induk=$_GET['nomor_induk'];

$hapus = "DELETE FROM karyawan WHERE nomor_induk='$nomor_induk'";
$hapus_query = mysqli_query($conn, $hapus);
var_dump($hapus_query);
if($hapus_query){
	echo "Berhasil dihapus!";
	echo "<meta http-equiv='refresh' content='0; url=data_karyawan.php'>";
}
else {
	echo "Gagal dihapus!";
	echo "<meta http-equiv='refresh' content='0; url=data_karyawan.php'>";
}

?>