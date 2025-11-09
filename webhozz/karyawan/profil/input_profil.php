<!DOCTYPE html>
<html>
<head>
	<title>Form Input Profil</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<!--Form Input Profil-Karyawan-->
		<form action="insert_profil.php" method="post">
		<div class="container">
			<table >
				<tr>
					<td colspan="3"><h3>Form Input Profil</h3></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama"></td>
				</tr>			
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td><input type="radio" name="jenis_kelamin" value="L">Laki-laki
					<input type="radio" name="jenis_kelamin" value="P">Perempuan</td>
				</tr>
					<td>Alamat</td>
					<td>:</td>
					<td><textarea name="alamat" cols="30" rows="5"></textarea></td>
				</tr>
				
				</tr>
					<td>No Telepon</td>
					<td>:</td>
					<td><input type="text" name="no_tlp"></td>
				</tr>
				
				<tr>
					<td colspan="3"><input type="submit" name="submit" value="Simpan"></td>
				</tr>
				
				
			</table>
		</div>
		</form>	
	</body>
</html>