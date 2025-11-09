<?php
include "koneksi.php";

$id=$_GET['id'];
$query = "DELETE FROM artikel WHERE id='$id'";

if (mysqli_query($conn, $query)) 	
	{
		echo "<script type='text/javascript'>
			   alert('Anda akan menghapus data!')
			  </script>
              <meta http-equiv='refresh' content='0;url=data_artikel.php'>";
	} 
else 
	{
		echo "Gagal hapus: ". mysqli_error($conn);
	}

mysqli_close($conn);

?>


