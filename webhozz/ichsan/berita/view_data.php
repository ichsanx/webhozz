<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<a href="form_input.php">Add Data</a>
<a href="view_data.php">View Data</a>
<br><hr><br>

<table align="center" width="100%" border="1">
	<tr>
		<th>Id</th>
		<th>Judul</th>
		<th>Kategori</th>
		<th>Penuis</th>
		<th>Tanggal</th>
		<th>Act</th>
	</tr>
<?php 
include "koneksi.php";
	$panggil = "SELECT * FROM berita";
	$tampil	 = mysql_query($panggil);
	while($r = mysql_fetch_array($tampil)){
		$id = $r['id'];
		$judul = $r['judul'];
		$kategori = $r['kategori'];
		$penulis = $r['penulis'];
		$tanggal = $r['tanggal'];

?>	
	<tr>
		<td><?php echo $id ; ?></td>
		<td><?php echo $judul ; ?></td>
		<td><?php echo $kategori ; ?></td>
		<td><?php echo $penulis ; ?></td>
		<td><?php echo $tanggal ; ?></td>
		<td>
			<a href="lihat.php?id=<?php echo "$id"; ?>">Data</a>
			<a onclick="return confirm ('Yakin hapus?')" href="delete.php?id=<?php echo "$id"; ?>">Hapus</a>
			<a href="form_edit.php?id=<?php echo "$id"; ?>">Edit</a>
		</td>
	</tr>
<?php } ?>
</table>

</body>
</html>		