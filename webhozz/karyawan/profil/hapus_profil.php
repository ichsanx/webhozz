<?php

include"koneksi.php";
$id_profil=$_GET['id_profil'];
$sql="DELETE FROM profil WHERE id_profil = '$id_profil'";

if(mysql_query($sql)) 
	{
	echo "<script>
		alert('Data Telah Dihapus')
		</script>
		<meta http-equiv='refresh' content='0;url=data_profil.php'>";
		/*  */
	}
else{
	echo "Gagal Hapus" . mysql_error();
	}
mysql_close();
?>
