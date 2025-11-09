<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	$id = $_GET['id'];
	include 'koneksi.php';
	$panggil = "SELECT * FROM berita WHERE id = '$id'";
	$tampil = mysql_query($panggil);
	while($r=mysql_fetch_array($tampil)){
	$judul = $r['judul'];
	$kategori = $r['kategori'];
	$isi = $r['isi'];
	$penulis = $r['penulis'];
	$tanggal = $r['tanggal'];
	 ?>


<form action="proses_edit.php" method="POST">
	<table align="center">
		<input type="hidden" name="id" value="<?php echo $id ?>">
		<tr>
			<th colspan="3">Edit Berita</th>
		</tr>
		<tr>
			<td>Id</td>
			<td><input type="text" name="id" value="<?php echo $id ?>" readonly></td>
		</tr>
		<tr>
			<td>Judul</td>
			<td><input type="text" name="judul" value="<?php echo $judul ?>"></td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td>
				<select name="kategori">
					<option value="<?php echo $kategori ?>"><?php echo $kategori ?></option>
					<option value="ekonomi">Ekonomi</option>
					<option value="politik">Politik</option>
					<option value="teknologi">Teknologi</option>
					<option value="sosial">Sosial</option>
					<option value="olahraga">Olahraga</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Isi</td>
			<td><textarea name="isi" cols="30" row="7"><?php echo $isi ?></textarea></td>
		</tr>
		<tr>
			<td>Penulis</td>
			<td><input type="text" name="penulis" value="<?php echo $penulis ?>"></td>
		</tr>
		</tr>
			<td></td>
			<td><input type="submit" name="submit" value="Masukan!"></td>
		</tr>
	</table>
</form>
	<?php } ?>

</body>
</html>							