<?php

echo "ini syntax php<br>";
echo "ini syntax php <br>";

$nama = "Webhozz";
echo "Nama Lengkap : $nama <br>";
echo "Nama Lengkap :".$nama."<br>";
echo $nama . "<br>";
echo strlen("string lenght")."<br>";

//Operator
$a = 5;
$b = 10;
$c = $a * $b;

echo "hasil dari ".$a." * ".$b." adalah : ". $c. "<br>";

$a += 4;
echo "Hasil A adalah ".$a."<br>";


//konstanta
define("pi", 3.14);
$hasil = $a*pi;
echo "Hasil perkalian adalah ".$hasil."<br>";

//Operator increment Decrement
//Operator increment
echo "Nilai A adalah".$a."<br>";
$a++;
echo "Nilai A adalah".$a."<br>";
$a++;
echo "Nilai A adalah".$a."<br>";
//Operator Decrement
--$a;
echo "Nilai A adalah".$a."<br>";
--$a;
echo "Nilai A adalah".$a."<br>";


/*
Percabangan
if (kondisi/syarat)
	{statment;}

kondisi/syarat menggunakan operator relasi ==, <>, <=, >=, <, >
*/

$nilai=50;
if($nilai>=60)
	{echo "Nilai ".$nilai." Lulus <br>";}
else
	{echo "Nilai ".$nilai." Gagal <br>";}

$n=100;
if($n>=90 and $n<=100)
	{echo "Grade A <br>";}
else if($n>=80 and $n<=89)
	{echo "Grade B <br>";}
else if($n>=60 and $n<=79)
	{echo "Grade C <br>";}
else
	{echo "Nilai diluar jangkauan <br>";}


$kode=8;
switch($kode){
	case 1:
		echo "Hari Minggu <br>";break;
	case 2:
		echo "Hari Senin <br>";break;
	default:
		echo "Salah input kode";

}		

?>

