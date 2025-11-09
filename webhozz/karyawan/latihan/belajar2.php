<?php

//* include "belajar1.php";

//looping FOR
for($i=1; $i<=5; $i++)
{
	echo "Perulangan For ke : ".$i."<br>";
}

//Looping While

$j=1; //nilai awal

//Kondisi
while($j<=5)
{
	echo "Perulangan While ke : ".$j. "<br>";
	$j=$j+1;//Iterasi
}



//Looping Do.. While
$k=1;
do
	{
		echo "Perulangan DoWhile ke : ".$k."<br>";
		$k=$k+1;
	}
while($k<=5);

//Membuat Function
function testing($a,$b)
{
	$total=$a * $b;
	return $total;
}

//Menampilkan Function
echo "Hasil Perkalian : ";
echo testing(10,20);


//Pemberian nilai Array
$cars=array("Alphard","Volvo","BMW","Toyota");

//Memberikan nilai array per index
$cars[0]="Alphard";
$cars[1]="Volvo";
$cars[2]="BMW";
$cars[3]="Toyota";

//Memanggil data array
echo "<br>Mobil saya : $cars[1] <br>";
echo "<br>Mobil saya : $cars[2] <br>";

//Array Foreach
$tahun=array("2014","2015","2016");
foreach ($tahun as $key) {
	echo " $key <br>";
}

?>

