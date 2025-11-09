<?php

$koneksi = mysql_connect("localhost", "root", "");
$pilihdb = mysql_select_db("ichsan", $koneksi);

if($pilihdb){
	//echo "Koneksi berhasil";
}
else {
	echo "Koneksi Gagal";
}

?>