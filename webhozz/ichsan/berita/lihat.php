<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<a href="form_input.php">Add Data</a>
<a href="view_data.php">View Data</a>
<br><hr><br>

<table width="50%" align= "center">
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

		<tr><th><?php echo "$judul"; ?></th></tr>
		<tr><td><i><?php echo "$kategori"; ?></i></td></tr>
		<tr><td>Tanggal : <?php echo "$tanggal"; ?></td></tr>
		<tr><td><?php echo "$isi"; ?></td></tr>
		<tr><td><?php echo "$penulis"; ?></td></tr>
	<?php } ?>
</table>

</body>
</html>	