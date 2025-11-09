<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title>Data Profil</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	
  	<script>
  		function konfirmasi()
  		{
  			tanya = confirm("Anda Yakin Akan Menghapus Data?");
  			if(tanya==true)
  			return true;
  			else
  			return false;
  		}
  	</script>

</head>

<body>
<div class="container">
<h1> Data Profil</h1>

<table width="700" border="0" cellspacing="3" cellpadding="2" class="table table-striped">
	<tr>
		<td width="24"><div align="left">Id</div></td>
		<td width="168"><div align="left">Nama</div></td>
		<td width="84"><div align="left">Jenis Kelamin</div></td>
		<td width="148"><div align="left">Alamat</div></td>
		<td width="106"><div align="left">No Telp</div></td>
		<td width="111"><div align="left">Aksi</div></td>
	</tr>
	
<?php
//1. Hubungkan ke database
include"koneksi.php";

//2. Buat Perintah SQL untuk mengambil data
$sql = "SELECT * FROM profil";
//3. Jalankan perintah SQL
$result = mysql_query($sql);

//4. Simpan data ke variabel
if (mysql_num_rows($result) > 0)
	while($row= mysql_fetch_array($result))
	{
//$id_profil=row['id_profil'];
?>

<tr>
	<td><?php echo $row['id_profil'];?></td>
	<td><?php echo $row['nama'];?></td>
	<td><?php echo $row['jenis_kelamin'];?></td>
	<td><?php echo $row['alamat'];?></td>
	<td><?php echo $row['no_tlp'];?></td>
	<td><a href="edit_profil.php?id_profil=<?php echo $row['id_profil']; ?>">Edit</a>
		<a href="hapus_profil.php?id_profil=<?php echo $row['id_profil']; ?>" onClick="return konfirmasi()">Hapus</a>
	</td>
</tr>

<?php
}
mysql_close();
?>
</table>
</div>
	
</div>
</body>