<?php
session_start();
include("koneksi.php");

	
if (empty($_SESSION['admin'])) {  header("location:login_form.php");  }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Edit Karyawan</title>
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
		         <li><a href='form_input_artikel.php'><span>Tambah</span></a></li>
		      </ul>
		   </li>
		   <li class='last'><a href='logout.php'><span>Logout</span></a></li>
		</ul>
		</div>
	</div>

	<div style="width:840px; min-height:400px; background-color:#F2F1EF;float:left;border-radius:5px;padding:0 10px">

<?php
include"koneksi.php";
$nomor_induk= $_GET['nomor_induk'];
$sql		= "SELECT * FROM Karyawan WHERE nomor_induk ='$nomor_induk'";
$result	= mysqli_query($conn, $sql);
while($data=mysqli_fetch_array($result)) {
	$nomor_induk			=	$data['nomor_induk'];
	$nama					=	$data['nama'];
	$tempat_tanggal_lahir	=	$data['tempat_tanggal_lahir'];
	$jenis_kelamin			=	$data['jenis_kelamin'];
	$agama 					= 	$data['agama'];
	$alamat					=	$data['alamat'];
	$no_tlp					=	$data['no_tlp'];
	$kode_divisi			=	$data['kode_divisi'];
	$foto 					= 	$data['foto'];


?>

<form class="pure-form" action="update_karyawan.php" method="post" enctype="multipart/form-data">
	<input type="hidden" value="<?php echo $nomor_induk?>" name="nomor_induk">
	<fieldset>
		<legend><h3>Form Input Karyawan</h3></legend>
		<table>
			<tr>
				<td>Nama</td>
				<td>&nbsp; : &nbsp;</td>
				<td><input value="<?php echo $nama ?>" type="text" placeholder="Masukan Nama Lengkap Anda" size="30" name="nama"></td>
			</tr>
			
			<tr>
				<td>Tempat, Tanggal Lahir</td>
				<td>&nbsp; : &nbsp;</td>
				<td><input value="<?php echo $tempat_tanggal_lahir ?>"type="text" placeholder="Jakarta, 30 Oktober 2014" size="30" name="tempat_tanggal_lahir"></td>
			</tr>

			<tr>
				<td>Jenis Kelamin</td>
				<td>&nbsp; : &nbsp;</td>
				<td><input type="radio" value="Laki-laki" name="jenis_kelamin"<?php 
				if($jenis_kelamin =="Laki-laki") echo "checked"; ?> >Laki-laki
				 <input type="radio" value="Perempuan" name="jenis_kelamin" <?php 
				if($jenis_kelamin =="Perempuan") echo "checked"; ?> >Perempuan </td>
			</tr>

			<tr>
				<td>Agama</td>
				<td>&nbsp; : &nbsp;</td>
				<td><input value="<?php echo $agama ?>" type="text" placeholder="Masukan Agama Anda" size="30" name="agama"></td>
			</tr>

			<tr>
				<td>Telepon</td>
				<td>&nbsp; : &nbsp;</td>
				<td><input value="<?php echo $no_tlp ?>" type="text" placeholder="Masukan Nomor Telepon Anda" size="30" name="no_tlp"></td>
			</tr>

			<tr>
				<td>Alamat</td>
				<td>&nbsp; : &nbsp;</td>
				<td><textarea cols="31" rows="5" name="alamat"><?php echo $alamat ?></textarea></td>
			</tr>

			<tr>
				<td>Divisi</td>
				<td>&nbsp; : &nbsp;</td>
				<td><select name="kode_divisi">
					<option value="1" <?php if($kode_divisi=="1") echo "selected"; ?> >HRD</option>
					<option value="2" <?php if($kode_divisi=="2") echo "selected"; ?> >Administrasi dan Keuangan</option>
					<option value="3" <?php if($kode_divisi=="3") echo "selected"; ?> >Marketing</option>
					<option value="4" <?php if($kode_divisi=="4") echo "selected"; ?> >Produksi</option></select>
				</td>
			</tr>

			<tr>
				<td>Foto</td>
				<td>&nbsp; : &nbsp;</td>
				<td><input type="file" name="foto">
					<input type="hidden" name="foto_tmp" value="<?php echo $foto ?>"></td>
			</tr>

			<tr>
				<td colspan="3">&nbsp;</td>
			</tr>

			<tr>
				<td colspan="3"><button type="submit" class="pure-button pure-button-primary">Simpan</button></td>
			</tr>

		</table>
	</fieldset>
</form>	
<?php
}

//Kode untuk menampilkan pesan status	
if(isset($_GET['status'])) {
	$status=$_GET['status'];
	switch($status) {
		case 0:
			echo "Upload Sukses! <br><br>";
			echo "<a class='pure-button' href='data_karyawan.php'>
			<i class='fa fa-eye fa-lg'></li>Lihat data</a>";
			break;

		case 1:
			echo "Anda belum memilih file yang akan di upload!";
			break;

		case 2:
			echo "Upload gagal, Format yang diperbolehkan hanya jpg, jpeg, png, dan gif!";
			break;

		case 3:
			echo "Upload gagal, Ukuran file terlalu besar! maksimal 50kb";
			break;
	}
}
?>
</div></div>
</body>
</html>