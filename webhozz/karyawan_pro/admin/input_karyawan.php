<?php
session_start();
include("koneksi.php");



	
if (empty($_SESSION['admin'])) {  header("location:login_form.php");  }

?>
<!-- CSS -->
<style type="text/css">
	.error{
		color: red;
	}
</style>
<!-- CSS -->

<!DOCTYPE html>
<html>
<head>
	<title>Form Input Karyawan</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<link rel="stylesheet" href="styles/styles.css">

	 <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   
   <title>Administrator</title>
</head>

<body>

<div style="margin:10px auto ; width:1120px; background-color:#66665e;padding:10px 0; text-align:center;border-radius:5px; color:#fff;font-family: calibri;" ><marquee>Halaman Administrator</marquee></div>

<div style="margin:0 auto ; width:1120px">
	<div style="float:left;margin-right:10px;width:250px;">
		<div id='cssmenu'>
		<ul>
		   <li class='active'><a href='index.php'><span>Home</span></a></li>
		   <li class='has-sub'><a href='#'><span>Karyawan</span></a>
		      <ul>
		         <li><a href='data_karyawan.php'><span>Lihat</span></a></li>
		         <li><a href='input_karyawan.php'><span>Tambah</span></a></li>
		      </ul>
		   </li>
		   <li class='has-sub'><a href='#'><span>Artikel</span></a>
		      <ul>
		         <li><a href='data_artikel.php'><span>Lihat</span></a></li>
		         <li><a href='input_artikel.php'><span>Tambah</span></a></li>
		      </ul>
		   </li>
		   <li class='last'><a href='logout.php'><span>Logout</span></a></li>
		</ul>
		</div>
	</div>

	<div style="width:840px; min-height:400px; background-color:#F2F1EF;float:left;border-radius:5px;padding:0 10px">

	<form class="pure-form" action="insert_karyawan.php" method="post" enctype="multipart/form-data">
		<fieldset>
			<legend><h2>Form Input Karyawan</h2></legend>
			<table>
				<tr>
					<td>Nama</td>
					<td>&nbsp; : &nbsp;</td>
					<td><input type="text" placeholder="Masukan Nama Lengkap Anda" size="30" name="nama" required></td>
						<td><p><span class="error">* Harus diisi.</span></p></td>
				</tr>

				<tr>
					<td>Tempat, Tanggal Lahir</td>
					<td>&nbsp; : &nbsp;</td>
					<td><input type="text" placeholder="Jakarta, 30 Oktober 2014" size="30" name="tempat_tanggal_lahir" required></td>
						<td><p><span class="error">* Harus diisi.</span></p></td>
				</tr>

				<tr>
					<td>Jenis Kelamin</td>
					<td>&nbsp; : &nbsp;</td>
					<td>
						<input type="radio" value="Laki-laki" name="jenis_kelamin" required/> Laki-laki
						<input type="radio" value="Perempuan" name="jenis_kelamin" required/> Perempuan
					</td>
				</tr>
				<tr>
					<td>Agama</td>
					<td>&nbsp; : &nbsp;</td>
					<td><input type="text" placeholder="Masukan Agama Anda" size="30" name="agama" required></td>
						<td><p><span class="error">* Harus diisi.</span></p></td>
				</tr>

				<tr>
					<td>Telepon</td>
					<td>&nbsp; : &nbsp;</td>
					<td><input type="text" placeholder="Masukan Nomor Telepon Anda" size="30" name="no_tlp" required></td>
						<td><p><span class="error">* Harus diisi.</span></p></td>
				</tr>

				<tr>
					<td>Alamat</td>
					<td>&nbsp; : &nbsp;</td>
					<td><textarea placeholder= "Masukan Alamat Anda" cols="31 rows="5" name="alamat" required></textarea></td>
						<td><p><span class="error">* Harus diisi.</span></p></td>
				</tr>

				<tr>
					<td>Divisi</td>
					<td>&nbsp; : &nbsp;</td>
					<td>
						<select name="desk_divisi">
							<option value="1">HRD</option>
							<option value="2">Administrasi dan Keuangan</option>
							<option value="3">Marketing</option>
							<option value="4">Produksi</option>
						</select>
					</td>
				</tr>

				<tr>
					<td>Foto</td>
					<td>&nbsp; : &nbsp;</td>
					<td><input type="file" name="foto"  required/></td>
				</tr>

				<tr>
					<td colspan="3">&nbsp;</td>
				</tr>

				<tr>
					<td colspan="3"><button type="submit" class="btn btn-primary">Simpan</button></td>
				</tr>
			</table>
		</fieldset>
	</form>
<?php
//Kode untuk menampilkan pesan status
if(isset($_GET['status'])) {
	$status=$_GET['status'];
	switch ($status) {
		case 0:
			echo "upload sukses!<br><br>";
			echo "<a class='pure-button' href='data_karyawan.php'><i class='fa fa-eye fa-lg'></i>Lihat data</a>";
			break;
		case 1:
			echo "Anda belum memilih file yang akan diupload!";
			break;
		case 2:
			echo "Upload Gagal, Format yang diperbolehkan hanya jpg, png, dan gif!";
			break;
		case 3:
			echo "Upload Gagal, Ukuran file terlalu besar! maksimal 50kb";
			break;
	}
}
?>

</div></div>

</body>
</html>