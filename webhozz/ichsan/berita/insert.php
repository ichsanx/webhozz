<?php
include "koneksi.php";

$judul 		= $_POST['judul'];
$kategori 	= $_POST['kategori'];
$isi 		= $_POST['isi'];
$penulis 	= $_POST['penulis'];
$tanggal 	= date("l, y/m/d");

$insert = "INSERT INTO berita (judul, kategori, isi, penulis, tanggal)
VALUES ('$judul', '$kategori', '$isi', '$penulis', '$tanggal')";
$result = mysql_query($insert);

if($result){
	echo "berhasil!";
		echo "<meta http-equiv='refresh' content='1; url=form_input.php'>";
}
else {
	echo "Gagal!";
		echo "<meta http-equiv='refresh' content='1; url=form_input.php'>";
}

?>