<?php
//Koneksi ke database diambil ke file koneksi.php
include "koneksi.php";

//Deklarasi variabel dari nama object(control form)
$nama					=$_POST['nama'];
$tempat_tanggal_lahir	=$_POST['tempat_tanggal_lahir'];
$jenis_kelamin			=$_POST['jenis_kelamin'];
$agama 					=$_POST['agama'];
$alamat 				=$_POST['alamat'];
$no_tlp					=$_POST['no_tlp'];
$kode_divisi			=$_POST['desk_divisi'];

/*
//alert jika ada form inputan yg kosong
if (empty($nama) or empty($nama))
{
    header("Location:input_karyawan.php?status=0");
    exit();
}

////
if (empty($nama) or empty($tempat_tanggal_lahir) or empty($jenis_kelamin) or empty($alamat) or empty($no_tlp) or empty($kode_divisi))
{
	header("location:input_karyawan.php?status=0");
	exit();
}
*/

//deklarasi variable untuk lokasi, nama, tipe serta ukuran file yang akan diupload
$lokasi_file = $_FILES['foto']['tmp_name'];
$nama_file = $_FILES['foto']['name'];
$tipe_file = $_FILES['foto']['type'];
$ukuran_file = $_FILES['foto']['size'];

/*
kode untuk mengganti spasi dan karakter pada nama file serta karakter non alphabet menjadi garis bawah
*/
//kode untuk mengganti spasi pada nama file menjadi garis bawah
$nama_baru=preg_replace("/\s+/","_",$nama_file);
$direktori="foto/$nama_baru";

//cek apakah file kosong
if(strlen($nama_file)<1)
	{
		header("location:foto_form.php?status=1");
		exit();
	}

//Cek apakah format gambar file adalah format gambar
$formatgambar=array("image/jpg", "image/jpeg", "image/gif", "image/png");
if(!in_array($tipe_file, $formatgambar))
{
	header("location:input_karyawan.php?status2");
}

//cek apakah ukuran file diatas 50kb bisa pakai script dibawah
/*
$MAX_FILE_SIZE=50000; //50kb
if($ukuran_file > $MAX_FILE_SIZE)
	{
		header("Location:foto_form.php?status=3");
		exit();
	}	
atau bisa pakai script dibawah ini
*/
$MAX_FILE_SIZE=50000; //50kb
//cek apakah ukuran file diatas 50kb
		if($ukuran_file > $MAX_FILE_SIZE)
			{
				header("Location:input_karyawan.php?status=3");
				exit();
			}

//kode untuk menyalin file ke folder foto
move_uploaded_file($lokasi_file, $direktori);
$sql="INSERT INTO foto(nama_file) VALUES ('$nama_baru')";
//atau bisa pakai script dibawah
//masukan nama file kedalam tabel foto didatabase mysql
//$result=mysql_query($sql) or die(mysql_error());

//Penyimpanan
$sql="INSERT INTO karyawan (nama,tempat_tanggal_lahir,jenis_kelamin,agama,alamat,no_tlp,kode_divisi,foto)
VALUES
('$nama','$tempat_tanggal_lahir','$jenis_kelamin','$agama','$alamat','$no_tlp','$kode_divisi','$nama_baru')";

if(mysqli_query($conn, $sql))
{
	echo "Berhasil disimpan <meta http-equiv='refresh' content='1;url=data_karyawan.php'>";
}
else
{
	echo "Gagal simpan <meta http-equiv='refresh' content='1;url=input_karyawan.php'>";
}

/*
cek jika query sukses
if ($result==true)
	{
	header("Location:foto_form.php?status=0")
	}	
else
	{
	header("Location:foto_form.php?status=4");
	}
*/

mysqli_close($conn);	
?>
 