<h2>File hasil upload foto</h2>
<?php
	require_once ('koneksi.php'); //menyertakan sebuah fle dg 1x eksekusi
	$sql		="SELECT * from foto order by id_foto DESC";
	$result		= mysqli_query($conn, $sql);
	$no=1;

	//proses menampilkan data
	while($row= mysqli_fetch_object($result))
	{
?>

		<!-- mengakses hasil query menggunakan notasi objek. Nama kolom akan berfungsi sebagai property dari objek $row.-->
		<img src='foto/<?= $rows->nama_file;?>' widht='150' heigth='150' alt=""/>
<?php		
	}
?>	