<?php
include "koneksi.php";

$id = $_GET['id'];

$hapus = "DELETE FROM berita WHERE id = '$id'";
$hapus_query = mysql_query($hapus);

if($hapus_query){
	echo "Berhasil dihapus!";
	echo "<meta http-equiv='refresh' content='1; url=view_data.php'>";
}
else {
	echo "Gagal dihapus!";
	echo "<meta http-equiv='refresh' content='1; url=view_data.php'>";
}

?>