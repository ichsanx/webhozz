<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<a href="form_input.php">Add Data</a>
<a href="view_data.php">View Data</a>
<br><hr><br>

<form action="insert.php" method="POST">

	<table align="center" widht="80">
		<tr>
			<td>Judul</td>
			<td>: <input type="text" name="judul"></td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td>:
				<select name="kategori">
					<option value="">pilih</option>
					<option value="ekonomi">Ekonomi</option>
					<option value="politik">Politik</option>
					<option value="teknologi">Teknologi</option>
					<option value="sosial">Sosial</option>
					<option value="olahraga">Olahraga</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>isi</td>
			<td><textarea name="isi" cols="30" rows="7"></textarea></td>
		</tr>
		<tr>
			<td>penulis</td>
			<td><input type="text" name="penulis"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Masukan!"></td>
		</tr>
	</table>

</form>

</body>
</html>						