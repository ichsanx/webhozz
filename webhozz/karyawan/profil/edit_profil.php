<!DOCTYPE html>
<html>
<head>
	<title>Form Input Profil</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<!--Form Edit Profil Karyawan-->
<?php
include "koneksi.php";
$id_profil=$_GET['id_profil'];
$sql = "SELECT * FROM profil WHERE id_profil='$id_profil'";
$result = mysql_query($sql);
	while($row=mysql_fetch_array($result)) {
	$id_profil		= $row['id_profil'];
	$nama			= $row['nama'];
	$jenis_kelamin  = $row['jenis_kelamin'];
	$alamat			= $row['alamat'];
	$no_tlp			= $row['no_tlp'];
	}
?>

<form id="form1" name="form1" method="post" action="update_profil.php">

<input type="hidden" name="id_profil" id="textfield" value="<?php echo $id_profil;?>" />

<div class="container">
<form action="update_profil.php" method="POST">
	<table>
		<tr>
		<h1>Form Edit Profil</h1>
			</tr>
			<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
			</tr>			
				
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td><input name="jenis_kelamin" type="radio" value="L"<?php if($jenis_kelamin=='L'){echo'
					checked';}?> /> Laki-laki
						<input name="jenis_kelamin" type="radio" value="P"<?php if ($jenis_kelamin=='P') {echo'
					cehecked';}?> /> Perempuan
					</td>
				</tr>	
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td>
						<textarea name="alamat" cols="45" rows="5"><?php echo"$alamat";?></textarea>
						</td>
				</tr>
				<tr>
					<td>No Telp</td>
					<td>&nbsp;</td>
					<td><input type="text" name="no_tlp" value="<?php echo"$no_tlp";?>" /></td>
				</tr>
				<tr>
					<td colspan="3"><button type="submit" name= "btn-simpan" class="btn btn-primary">Simpan</
					button></td>
				</tr>
<?php mysql_close(); ?>

</table>
</form>	
</div> 
</body>
</html>