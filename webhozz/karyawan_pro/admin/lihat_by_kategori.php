   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" />
   <link rel="stylesheet" href="styles/styles.css">
   
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />       
   <meta name="viewport" content="width=device-width, initial-scale=1">

   
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>   

<!-- Tambahan Menu-->
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


<h3 class="text-center">Data Artikel</h3>
<table class="table table-hover table-bordered">
<thead>
	<tr>
    	<th>No</th>
        <th>Judul</th>
        <th>Deskripsi Singkat</th>
        <th>Detail Deskripsi</th>
        <th>Kategori</th>
        <th>Foto</th>
        <th>Aksi</th>
	</tr>
</thead>
</tbody>
<?php
	include "koneksi.php";
	$id = $_GET['id']; //tambahan untuk lihat_by_kategori
	
	//start pagination
	$sqlcount  ="SELECT COUNT(id) FROM artikel WHERE kategori='$id'";
	
	$rscount    =mysqli_fetch_array(mysqli_query($conn,$sqlcount));
	$banyakdata =$rscount[0];
	$page       =isset($_GET['page'])?$_GET['page']:1;//jika page ada maka nilai akan ditampilkan, jika tidak maka tampil page 1
	$limit      =5;//banyaknya data dalam  laman

	
	$mulai_dari=$limit*($page-1);
	//end pagination	
	
	$query="SELECT * FROM artikel, kategori WHERE artikel.kategori=kategori.id_kategori AND artikel.kategori='$id' ORDER BY artikel.kategori DESC LIMIT $mulai_dari,$limit ";
	$sql       =mysqli_query($conn,$query);
	$no        =$limit*($page-1);
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
						<td><a href='edit_artikel.php?id=$id'>Edit</a>
						    <a href='hapus_artikel.php?id=$id' onclick='return confirm(\"Yakin ingin Hapus\")'>Hapus</a>
						</td>
					</tr>
					";
					$no++;
	}
?>

</tbody>
</thead>
</table>

<?php
	//membuat pagination
	$banyakhalaman = ceil($banyakdata/$limit); //ceil membulatkan keatas
	echo 'Halaman:';
	for($i=1; $i<=$banyakhalaman;$i++)
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
<a href="input_artikel.php">Tambah Data Artikel</a><br>
<a href="data_artikel.php">Back</a><br>

