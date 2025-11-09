<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<h3 class="text-center">Data Karyawan</h3>
<table class="table table-hover table-bordered">
	<thread>
		<tr>
			<th>No</th>
			<th>Id</th>
			<th>Nama</th>
			<th>TTL</th>
			<th>Jenis Kelamin</th>
			<th>Agama</th>
			<th>Alamat</th>
			<th>Telepon</th>
			<th>Divisi</th>
			<th>Foto</th>
			<th>Aksi</th>
		</tr>
	</thread>
<tbody>
	<?php
	include ("koneksi.php");

	//startpagination
	$sqlcount	="SELECT COUNT(nomor_induk) FROM karyawan";

	$rscount	= mysqli_fetch_array(mysqli_query($conn, $sqlcount));
	$banyakdata	= $rscount[0];
	$page		= isset($_GET['page'])?$_GET['page']:1;
	$limit		= 4;//banyaknya data dalam satu halaman

	$mulai_dari = ($page-1) * $limit;
	//endpagination

	$query		= "SELECT * FROM Karyawan, divisi WHERE karyawan.kode_divisi=divisi.kode_divisi ORDER BY karyawan.nomor_induk DESC LIMIT $mulai_dari, $limit";
	$sql		= mysqli_query($conn, $query);
	$no			= ($page * $limit)-4;
	while ($data=mysqli_fetch_array($sql))
	{
		$nomor_induk			= $data['nomor_induk'];
		$nama					= $data['nama'];
		$tempat_tanggal_lahir	= $data['tempat_tanggal_lahir'];
		$jenis_kelamin			= $data['jenis_kelamin'];
		$agama					= $data['agama'];
		$alamat 				= $data['alamat'];
		$no_tlp 				= $data['no_tlp'];
		$kode_divisi 			= $data['desk_divisi'];
		$foto 					= $data['foto'];

		echo"
			<tr>
				<td>$no</td>
				<td>$nomor_induk</td>
				<td>$nama</td>
				<td>$tempat_tanggal_lahir</td>
				<td>$jenis_kelamin</td>
				<td>$agama</td>
				<td>$alamat</td>
				<td>$no_tlp</td>
				<td>$kode_divisi</td>
				<td><center><img src='foto/$foto' width='100' height='100'></center></td>
				<td>
					<a href='edit_karyawan.php?nomor_induk=$nomor_induk'>Edit</a>
					<a href='hapus_karyawan.php?nomor_induk=$nomor_induk'>Hapus</a>
				</td>
			</tr>
			";
			$no++;	
	}
	?>
</tbody>	
</table>

<?php
//membuat pagination
$banyakhalaman = ceil($banyakdata/$limit); //ceil=membulatkan keatas
echo 'Halaman :';
for($i=1; $i<=$banyakhalaman; $i++)
{
	if($page !=$i)
	{
		echo '[<a href="data_karyawan.php?page='.$i.'">'.$i.'</a>]';
	}
	else
	{
		echo "[$i]";
	}
}

?>

&nbsp;&nbsp;<a href="input_karyawan.php">Tambah Data Karyawan</a>

<br>
<h5>Lihat by</h5>
<ol>
	<li><a href="lihat_by_divisi.php?kode_divisi=1">HRD</a></li>
	<li><a href="lihat_by_divisi.php?kode_divisi=2">Administrasi dan Keuangan</a></li>
	<li><a href="lihat_by_divisi.php?kode_divisi=3">Marketing</a></li>
	<li><a href="lihat_by_divisi.php?kode_divisi=4">Produksi</a></li>
</ol>
