<?php 
include "koneksi.php";

$id = $_POST['id'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$isi = $_POST['isi'];
$penulis = $_POST['penulis'];

$update = "UPDATE berita SET
judul='$judul',
kategori='$kategori',
isi='$isi',
penulis='$penulis' WHERE id='$id'";
$update_query= mysql_query($update);

if($update_query) {
	echo "Berhasil Update!";
	echo "<meta http-equiv='refresh' content='1; url=view_data.php'>";
}
else {
	echo "Gagal Update!";
	echo "<meta http-equiv='refresh' content='1; url=view_data.php'>";
}
 ?>

