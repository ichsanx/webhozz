<?php
//1.Koneksi ke database diambil ke file koneksi.php
include"koneksi.php";

//2. Deklarasi variabel dari nama object(control form)
$id_profil		= $_POST['id_profil'];
$nama			= $_POST['nama'];
$jenis_kelamin	= $_POST['jenis_kelamin'];
$alamat			= $_POST['alamat'];
$no_tlp			= $_POST['no_tlp'];


$sql = "UPDATE profil set nama='$nama', 
jenis_kelamin='$jenis_kelamin',
alamat='$alamat',
no_tlp='$no_tlp' WHERE id_profil='$id_profil'";

if (mysql_query($sql))
{
	echo "Berhasil diupdate <meta http-equiv='refresh' content='1;url=data_profil.php'>
	";
}
else
{
	echo "Gagal simpan <meta http-equiv='refresh' content='1;url=edit_profil.php'>
	";
}

mysql_close();
?> 