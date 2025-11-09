<?php
$connection = mysql_connect('localhost', 'root', '');
$db = mysql_select_db('karyawan_pro', $connection);
$term = strip_tags(substr($_GET['judul'],0, 100));
$term = mysql_escape_string($term); // Attack Prevention
if($term=="")
echo "<p class=\"text-error\">Masukan nama artikel yang akan anda cari!";
else{
	
$query = mysql_query("select * from artikel where judul like '%$term%'") or die(mysql_error());
$hasil = '';

if (mysql_num_rows($query)){
while($rows = mysql_fetch_array($query)){

$hasil=$hasil."<div class=\"row\">
	<div class='col-md-1'></div>
	<div class='col-md-11'>
			<h4><a href='data_artikel.php?id=$rows[id]'>$rows[judul]</a></h4>
			<img src=\"foto/$rows[foto]\"  class=\"img-polaroid\" width='50' height='50'>
			$rows[kategori]
			$rows[desk_singkat]
	</div>
</div>";

}
} else{
$hasil = " <h4 style='color:red'>Hasil tidak ditemukan!</h4><img src='image/404.jpg'>";
}

echo $hasil;
}
?>
