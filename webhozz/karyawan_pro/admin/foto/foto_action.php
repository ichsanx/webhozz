<?php

//status upload
/*
status 0 : sukses
status 1 : File yg diupload kosong
status 2 : bukan file gambar
status 3 : gagal menyimpan ke database, ukuran besar
*/

include "koneksi.php";
$nama_file=$_POST['nama_file'];

//deklarasi variable untuk lokasi, nama, tipe serta ukuran file yang akan diupload
$lokasi_file = $_FILES['nama_file']['tmp_name'];
$nama_file = $_FILES['nama_file']['name'];
$tipe_file = $_FILES['nama_file']['type'];
$ukuran_file = $_FILES['nama_file']['size'];

//cek apakah file kosong
if(strlen($nama_file)<1)
	{
		header("location:foto_form.php?status=1");
		exit();
	}

//cek apakah format file adalah format gambar
$formatgambar=array("image/jpg", "image/jpeg", "image/gif", "image/png");
if(!in_array($tipe_file, $formatgambar))
{
	header("Location:foto_form.php?status=2");
}

//cek apakah ukuran file diatas 50kb
$MAX_FILE_SIZE=50000; //50kb
if($ukuran_file > $MAX_FILE_SIZE)
	{
		header("Location:foto_form.php?status=3");
		exit();
	}	

//kode untuk mengganti spasi pada nama file menjadi garis bawah
$nama_baru=preg_replace("/\s+/","_",$nama_file);
$direktori="foto/$nama_baru";

//kode untuk menyalin file ke folder foto
move_uploaded_file($lokasi_file, $direktori);
$sql="INSERT INTO foto(nama_file) VALUES ('$nama_baru')";

//masukan nama file kedalam tabel foto didatabase mysql
$result=mysqli_query($conn, $sql) or die(mysqli_error($conn));

//cek jika query sukses
if ($result==true)
	{
	header("Location:foto_form.php?status=0")
	}	
else
	{
	header("Location:foto_form.php?status=4");
	}

mysqli_close($conn);	
?>