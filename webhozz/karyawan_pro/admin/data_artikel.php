<?php
session_start();
include("koneksi.php");
 
if (empty($_SESSION['admin'])) {  header("location:login_form.php");  }
 
?>
 
<!doctype html>
<html lang=''>
<head>
   <title>Data Artikel</title>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles/styles.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
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
		         <li><a href='input_karyawan.php'><span>Tambah</span></a></li>
		         <li><a href='cari_karyawan.php'><span>Cari</span></a></li>
		      </ul>
		   </li>
		   <li class='has-sub'><a href='#'><span>Artikel</span></a>
		      <ul>
		         <li><a href='data_artikel.php'><span>Lihat</span></a></li>
		         <li><a href='input_artikel.php'><span>Tambah</span></a></li>
		         <li><a href='cari_artikel.php'><span>Cari</span></a></li>
		      </ul>
		   </li>
		   <li class='last'><a href='logout.php'><span>Logout</span></a></li>
		</ul>
		</div>
	</div>
 
	<div style="width:860px; min-height:400px; background-color:#F2F1EF;float:left;border-radius:5px;padding:0 10px">
		
		<h1 class="text-center">Data artikel</h1>
		<table class="table table-hover table-bordered ">
		<thead>
			<tr class="info">
				<th>Id</th>
				<th>Judul</th>
				<th>Deskripsi Singkat</th>
				<th>Detail Deskripsi</th>
				<th>Kategori</th>
				<th>Foto</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>

		<?php
		include "koneksi.php";
		//start pagination
		$sqlcount = "SELECT COUNT(id) FROM artikel";
		
		$rscount    =mysqli_fetch_array(mysqli_query($conn, $sqlcount));
		$banyakdata =$rscount[0];
		$page       =isset($_GET['page'])?$_GET['page']:1;
		$limit      =5;//banyaknya data dalam 1 laman
		
		$mulai_dari = $limit*($page-1);
		//end pagination
		
		//$query = "SELECT * FROM artikel";
		//diubah join table | ODER BY ... tambahan pagination
		$query = "SELECT * FROM artikel,kategori WHERE artikel.kategori=kategori.id_kategori ORDER BY artikel.kategori DESC LIMIT $mulai_dari,$limit";
		
		//$no=1;
		//no yang digunakan no pagination
		$no  = ($page*$limit)-($limit-1);
	
		$sql = mysqli_query($conn, $query);		
		while($data=mysqli_fetch_array($sql)){
						$id 			=$data['id'];
						$judul			=$data['judul'];
						$desk_singkat	=$data['desk_singkat'];
						$detail_desk	=$data['detail_desk'];
						$kategori		=$data['desk_kategori'];
						$foto 			=$data['foto'];
 
			echo"
				<tr>
					<td>$id</td>
					<td>$judul</td>
					<td>$desk_singkat</td>
					<td>$detail_desk</td>
					<td>$kategori</td>
					<td><center><img src='foto/$foto' width='100' height='100'></center></td>
					<td>
						<a href='edit_artikel.php?id=$id' type='button' class='btn btn-default btn-xs'>Edit </a>
						<a href='hapus_artikel.php?id=$id type='button' class='btn btn-default btn-xs' onclick='return confirm(\"Yakin hapus?\")'>Hapus</a>
						
					</td>
				</tr>
				";$no++;
		}
 
		?>
 
		</tbody>
		</table>
 
<?php
	//Menampilkan pagination
	$banyakhalaman = ceil($banyakdata/$limit); //ceil membulatkan keatas
	echo 'Halaman:';
	for($i=1; $i<=$banyakhalaman; $i++)
	{
		if($page!=$i)	
		{
			echo '[<a href="data_artikel.php?page='.$i.'">'.$i.'</a>]';	
		}
		else
		{
			echo "[$i]";	
		}
	}
?>
 
		&nbsp;&nbsp;<a href="input_artikel.php">Tambah Data artikel</a>
 
		<br>
		<h5>Lihat by</h5>
		<ol>
			<li><a href="lihat_by_kategori.php?id=1">Teknologi</a></li>
			<li><a href="lihat_by_kategori.php?id=2">Olahraga</a></li>
			<li><a href="lihat_by_kategori.php?id=3">Otomotif</a></li>
			<li><a href="lihat_by_kategori.php?id=4">Politik</a></li>
		</ol>
 
	</div>
 
</div>
 
</body>
<html>
 
