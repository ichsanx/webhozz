<?php
//1.Koneksi ke database diambil ke file koneksi.php
include"koneksi.php";

//2. Deklarasi variabel dari nama object(control form)
$nama			= $_POST['nama'];
$jenis_kelamin	= $_POST['jenis_kelamin'];
$alamat			= $_POST['alamat'];
$no_tlp			= $_POST['no_tlp'];

//3. Masukkan isi variabel ke database dengan perintah Sql
$sql = "INSERT INTO profil(nama, jenis_kelamin, alamat, no_tlp) VALUES ('$nama','$jenis_kelamin', '$alamat', '$no_tlp')";

//4. Jalankan perintah Sql
	if(mysql_query($sql))
		{
			echo "Berhasil disimpan <meta http-equiv='refresh'
			content='1;url=data_profil.php'>";
		}
	else 
		{
			echo "Gagal simpan <meta http-equiv='refresh'
			content='1;url=input_profil.php'>";
		}
		
//5. mMenutup perintah Sql
mysql_close();

?> 