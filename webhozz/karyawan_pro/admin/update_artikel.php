<?php
include "koneksi.php";

		$id			        	=$_POST['id'];
		$judul			        =$_POST['judul'];
		$desk_singkat			=$_POST['desk_singkat'];
		$detail_desk			=$_POST['detail_desk'];
		$kategori				=$_POST['kategori'];

		//kode upload
		$lokasi_file = $_FILES['foto']['tmp_name'];
		$foto   	 = $_FILES['foto']['name'];
		$tipe_file   = $_FILES['foto']['type'];
		$ukuran_file = $_FILES['foto']['size'];
		
		//cek apakah file kosong
		if(strlen($foto)<1)
			{
				$sql1="UPDATE artikel SET judul	='$judul',
						  desk_singkat			='$desk_singkat',
						  detail_desk	        ='$detail_desk',
						  kategori              ='$kategori',
						  WHERE id 			    ='$id'";	
			
				//cek jika query sukses
				if (mysqli_query($conn, $sql1)) 
					{
						echo "Berhasil diupdate <meta http-equiv='refresh' content='1;url=data_artikel.php'>";			
					}
			}
		else
		{
		/*
		kode untuk mengganti spasi dan kareakter pada nama file
		serta karakter non alphabet menjadi garis bawah
		*/
		$nama_baru=preg_replace("/\s+/","_",$foto); //preg_replace: gunakan untuk mengganti karakter yang tidak di inginkan
		$direktori="foto/$nama_baru";

		//cek apakah format file adalah format gambar
		$formatgambar=array("image/jpg","image/jpeg","image/gif","image/png");
		if(!in_array($tipe_file,$formatgambar))
			{
				header("Location:edit_artikel.php?status=2&&id=$id");
				exit();
			}
		
		$MAX_FILE_SIZE=50000; //50kb
		//cek apakah ukuran file diatas 50kb
		if($ukuran_file > $MAX_FILE_SIZE)
			{
				header("Location:edit_artikel.php?status=3&&id=$id");
				exit();
			}
		
		//simpan data foto baru
		$sql2="UPDATE artikel SET judul      ='$judul',
						  desk_singkat		='$desk_singkat',
						  detail_desk       ='$detail_desk',
						  kategori          ='$kategori',
						  foto              ='$nama_baru' WHERE id ='$id'";

		//kode untuk menyalin file ke folder foto
		move_uploaded_file($lokasi_file, $direktori);
		
		//cek jika query sukses
			if (mysqli_query($conn, $sql2)) 
				{
					echo "Berhasil diupdate <meta http-equiv='refresh' content='1;url=data_artikel.php'>";			
				}
		}
	
		mysqli_close($conn);
?>