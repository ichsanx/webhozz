<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="styles/styles.css">    
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css" />    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">  

    <!--Script JQuery Menu-->
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="script.js"></script>
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
             <li><a href='form_input_karyawan.php'><span>Tambah</span></a></li>
                 <li><a href='cari_karyawan.php'><span>Cari</span></a></li>
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
    
<div style="width:860px; min-height:400px; background-color:#F2F1EF;float:left;border-radius:5px;padding:0 10px">

<?php 
include "koneksi.php";
$id  = $_GET['id'];

$query = "SELECT * FROM artikel WHERE id='$id'";
$sql   = mysqli_query($conn, $query);
		while($data = mysqli_fetch_array($sql)){
						$id 			    =$data['id'];
						$judul			  =$data['judul'];
						$desk_singkat	=$data['desk_singkat'];
						$detail_desk	=$data['detail_desk'];
						$kategori		  =$data['kategori'];
						$foto 			  =$data['foto'];
			}
?>

<form class="pure-form" action="update_Artikel.php" method="post" enctype="multipart/form-data">
<h1>Form Edit Artikel</h1>
  <table width="550" border="0" cellspacing="3" cellpadding="2">
  <input type="hidden" name="id" value="<?php echo $id; ?>"/>
    <tr>
      <td width="179">Judul</td>
      <td width="9">:</td>
      <td width="330">
      <input type="text" name="judul" id="judul" placeholder="Masukkan Judul Artikel" value="<?php echo $judul?>" /></td>
    </tr>
    <tr>
      <td>Deskripsi Singkat</td>
      <td>:</td>
      <td><textarea name="desk_singkat" id="desk_singkat" cols="45" rows="5"><?php echo $desk_singkat?></textarea></td>
    </tr>
    <tr>
      <td>Detail Deskripsi</td>
      <td>:</td>
      <td><textarea name="detail_desk" id="detail_desk" cols="45" rows="5"><?php echo $detail_desk?></textarea></td>
    </tr>
    <tr>
      <td>Kategori</td>
      <td>:</td>
      <td>
        <select name="kategori" id="select">            
            <option value=1>Teknologi</option>
            <option value=2>Olahraga</option>
            <option value=3>Otomotif</option>
            <option value=4>Politik</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Foto</td>
      <td>:</td>
      <td><input type="file" name="foto" /></td>
    </tr>
    <tr>
       <td colspan="3"><button type="submit" class="pure-button pure-button-primary">Simpan</button>
      </td>
    </tr>
  </table>
</form></div></div>
</body>
</html>

<?php
//Kode untuk menampilkan pesan status
if(isset($_GET['status']))
	{
		$status=$_GET['status'];
		switch($status)
		{
			case 0:
				echo"Upload sukses <br><br>";	
				echo "<a class='pure-button' href='dat_artikel.php'>
 				      <i class='fa fa-eye fa-lg'></i>Lihat Data</a>";
				break;
			case 1:
				echo"Anda belum memilih file yang akan diupload";	
				break;
			case 2:
				echo"Upload gagal, format yang diperbolehkan hanya jp, jpeg, gif";	
				break;
			case 3:
				echo"Upload gagal, Ukuran file terlalu besar, maksimum 50kb";	
				break;
		}
	}
?>