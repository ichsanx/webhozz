<?php
//menggunakan parameter
Function testing($nilai)
{
	echo "Tinggi badan anda adalah $nilai";

}
$tinggibadan=170;
testing($tinggibadan);
echo "<br>";


function penjumlahan($nilai1, $nilai2)
{
	$total=$nilai1 + $nilai2;
	echo "$nilai1 + $nilai2 = ".$total;
}
penjumlahan(30,20);



?>
