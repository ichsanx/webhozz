<?php
include "koneksi.php";

		$judul			        =$_POST['judul'];
		$desk_singkat			=$_POST['desk_singkat'];
		$detail_desk			=$_POST['detail_desk'];
		$kategori				=$_POST['kategori'];
		

		//kode upload
		$lokasi_file = $_FILES['foto']['tmp_name'];
		$foto   	 = $_FILES['foto']['name'];
		$tipe_file   = $_FILES['foto']['type'];
		$ukuran_file = $_FILES['foto']['size'];
		
		/*
		kode untuk mengganti spasi dan kareakter pada nama file
		serta karakter non alphabet menjadi garis bawah
		*/
		$nama_baru=preg_replace("/\s+/","_",$foto); //preg_replace: gunakan untuk mengganti karakter yang tidak di inginkan
		$direktori="foto/$nama_baru";
		
		//cek apakah file kosong
		if(strlen($foto)<1)
			{
				header("location:foto_form.php?status=1");
				exit();
			}
		
		//cek apakah format file adalah format gambar
		$formatgambar=array("image/jpg","image/jpeg","image/gif","image/png");
		if(!in_array($tipe_file, $formatgambar))
			{
				header("location:input_artikel.php?status=2");
				exit();
			}
		
		$MAX_FILE_SIZE=50000; //50kb
		//cek apakah ukuran file diatas 50kb
		if($ukuran_file > $MAX_FILE_SIZE)
			{
				header("Location:input_artikel.php?status=3");
				exit();
			}

		//kode untuk menyalin file ke folder foto
		move_uploaded_file($lokasi_file, $direktori);
		$sql="INSERT INTO foto(nama_file) VALUES ('$nama_baru')";
		
		//penyimpanan
		$sql="INSERT INTO artikel (judul,desk_singkat,detail_desk,kategori,foto) 
	          VALUES ('$judul','$desk_singkat','$detail_desk','$kategori','$nama_baru')";


		if (mysqli_query($conn, $sql)) 
			{
				echo "Berhasil disimpan <meta http-equiv='refresh' content='1;url=data_artikel.php'>";			
			}
		else
			{
				echo "Gagal simpan <meta http-equiv='refresh' content='1;url=input_artikel.php'>";
			}
	
		mysqli_close($conn);
?>