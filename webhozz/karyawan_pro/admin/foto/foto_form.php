<!DOCTYPE html>
<head>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css"
/>
<meta http-equiv="Content-Type" content="text/html; chaarset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="width:500px; margin:0 auto">
<div class="pure-g">
<div class="pure-u-5-5">
<form class="pure-form" action="foto_action.php" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend><h3>Upload Foto</h3></legend>
		<input type="file" name="nama_file" />
		<button type="submit" class="pure-button pure-button-primary">Upload</button>
	</fieldset>
</form>
</div>

<?php

//Kode untuk menampilkan pesan status
if(isset($_GET['status']))
	{
		$status=$_GET['status'];
		switch($status)
		{
		case 0:
			echo"Upload Sukses";
			break;
		case 1:
			echo"Anda Belum memilih file yang akan diupload";
			break;
		case 2:
			echo"Upload Gagal, Format yg diperbolehkan hanya jpg, jpeg, gif";
			break;
		case 3:
			echo"Upload Gagal, Ukuran file terlalu besar, maksimum 50kb";
			break;
		case 4:
			echo"Upload Gagal";
			break;
		}	
	}		

//include file foto_view.php
include('foto_view.php');
?>
</body>
</html>