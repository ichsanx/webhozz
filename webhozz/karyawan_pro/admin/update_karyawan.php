<?php
include "koneksi.php";

		$nomor_induk			=$_POST['nomor_induk'];
//		$foto					=$_POST['foto'];
		$nama			        =$_POST['nama'];
		$tempat_tanggal_lahir	=$_POST['tempat_tanggal_lahir'];
		$jenis_kelamin			=$_POST['jenis_kelamin'];
		$agama					=$_POST['agama'];
		$alamat					=$_POST['alamat'];
		$no_tlp					=$_POST['no_tlp'];
		$kode_divisi			=$_POST['kode_divisi'];
		
		//kode upload
		$lokasi_file = $_FILES['foto']['tmp_name'];
		$foto        = $_FILES['foto']['name'];
		$tipe_file   = $_FILES['foto']['type'];
		$ukuran_file = $_FILES['foto']['size'];
		//$foto_tmp

		//cek apakah file kosong
		if(strlen($foto)<1)
			{
				//header("Location:edit_karyawan.php?status=1&&nomor_induk=$nomor_induk");
				//exit();
				$sql1="UPDATE karyawan SET nama='$nama',
						  tempat_tanggal_lahir ='$tempat_tanggal_lahir',
						  jenis_kelamin        ='$jenis_kelamin',
						  agama                ='$agama',
						  alamat               ='$alamat',
						  no_tlp               ='$no_tlp', 
						  kode_divisi          ='$kode_divisi'
						  WHERE nomor_induk    ='$nomor_induk'";	
				//cek jika query sukses
				if (mysqli_query($conn, $sql1)) 
					{
						echo "Berhasil diupdate <meta http-equiv='refresh' content='1;url=data_karyawan.php'>";			
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
					header("Location:edit_karyawan.php?status=2&&nomor_induk=$nomor_induk");
					exit();
				}
			
			$MAX_FILE_SIZE=500000; //500kb
			//cek apakah ukuran file diatas 50kb
			if($ukuran_file > $MAX_FILE_SIZE)
				{
					header("Location:edit_karyawan.php?status=3&&nomor_induk=$nomor_induk");
					exit();
				}

			//simpan data foto baru
				$sql2="UPDATE karyawan SET nama='$nama',
						  tempat_tanggal_lahir='$tempat_tanggal_lahir',
						  jenis_kelamin       ='$jenis_kelamin',
						  agama               ='$agama',
						  alamat              ='$alamat',
						  no_tlp              ='$no_tlp', 
						  kode_divisi         ='$kode_divisi',
						  foto                ='$nama_baru' WHERE nomor_induk ='$nomor_induk'";
			//kode untuk menyalin file ke folder foto
			move_uploaded_file($lokasi_file, $direktori);

			//cek jika query sukses
			if (mysqli_query($conn, $sql2)) 
				{
					echo "Berhasil diupdate <meta http-equiv='refresh' content='1;url=data_karyawan.php'>";			
				}
		}
	
		mysqli_close($conn);
?>