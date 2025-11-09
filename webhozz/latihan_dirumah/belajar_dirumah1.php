<?php
//mengenal variable

$a = "Hello";
$b = "World";
echo "$a", "$b";

//mengenal echo
echo "<h2>PHP is fun!</h2>";
echo "Hello World!<br>";
echo "i'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.<br>";
//mengenal substring
echo strlen ("Hello World!");


//mengenal print
print "<h2>PHP is fun!</h2>";
print "Hello World!<br>";
print "i'm about to learn PHP!<br>";

//mengenal variable
$tanggal = "22";
$bulan = "September";
$tahun = "2014";
echo "$tanggal-$bulan-$tahun<br>";

//kontanta
define("Pi",3.141592);
echo Pi;
echo "<br>";

//operator
$x=10;
$y=6;
echo "Hasil Dari ".$x. "+".$y." = ";
echo ($x+$y);
echo "<br>";
echo "Hasil Dari ".$x. "-".$y." = ";
echo ($x-$y);
echo "<br>";
echo "Hasil Dari ".$x. "*".$y." = ";
echo ($x*$y);
echo "<br>";
echo "Hasil Dari ".$x. "/".$y." = ";
echo ($x/$y);
echo "<br>";
echo "Hasil Dari ".$x. "%".$y." = ";
echo ($x%$y);
echo "<br>";

$x=10;
echo $x;//ouput 10
echo "<br>";
$y=20;
$y += 100;
echo $y; //output 120
echo "<br>";
$z=50;
$z -= 25;
echo $z; //output 25
echo "<br>";
$i=5;
$i *=6;
echo $i; //output 30
echo "<br>";
$j=10;
$j /= 5;
echo $j; //output 2
echo "<br>";
$k=15;
$k%=4;
echo $k; //output 3
echo "<br>";
echo "<br>";

$a="Hello";
$b= $a."World!";
echo $b; //output Hello World!

echo "<br>";

$x="Hello";
$x.="World!";
echo $x; //output Hello World!

echo "<br>";
$x=10;
echo ++$x; //output 11
echo "<br>";
$y=10;
echo $y++; //output 10
echo "<br>";
$z=5;
echo --$z; //output 4
echo "<br>";
$i=5;
echo $i--; //output 5
echo "<br>";

echo "<br>";

//Perbandingan IF
$cuaca = "cerah";
if ($cuaca=="cerah")
{
	echo "Saya akan berangkat kuliah! <br>";
}

$jarak=40;
if($jarak<=40)
{
	echo "Jalan kaki saja <br>";
}
if($jarak>=40)
{
	echo "Naik Motor <br>";
}
if($jarak !=40)
{
	echo "Diam Ditempat <br>";
}


//menggunakan argumen if dan else
$cuaca="mendung";
if($cuaca == "cerah")//jika cuaca cerah
{
	echo "Saya akan berangkat kuliah <br>";
}
else
{
	echo "Saya akan membuat mie ramen <br>";
}	

$cuaca="mendung";
if($cuaca !="cerah")//jika cuaca tidak cerah
{
	echo "Saya akan membuat mie ramen <br>";
}
else
{
	echo "Saya akan berangkat kuliah <br>";
}

$cuaca="mendung";
if($cuaca =="mendung") //jika cuaca cerah
{
	echo "Maka bawa payung <br>";
}
else if ($cuaca=="cerah")
{
	echo "Maka saya akan berangkat kuliah dengan jalan kaki meskipun jaraknya 20 km. <br>"; 
}
else if ($cuaca=="banjir")
{
	echo "Maka bawa perahu sendiri dari rumah <br>";
}
else{
	echo "Dirumah saja";
}


//switch
$a=3;
switch ($a)
{
case 0 :
	echo "Angka Nol <br>";
	break;
case 1 :
	echo "Angka Satu <br>";
	break;
case 2 :
	echo "Angka Dua <br>";
	break;
case 3 :
	echo "Angka Tiga <br>";
	break;
case 4 :
	echo "Angka Empat <br>";
	break;
case 5 :
	echo "Angka Lima <br>";
	break;
default :
	echo "Angka diluar jangkauan <br>";
	break;
}


//Mengenal Perulangan FOR increment/decrement
//++ penambahan
for ($x=0; $x<=10; $x++) 
{
	echo "The number is : $x <br>";
}

//-- pengurangan
for ($x=10;$x>=1;$x--)
{
	echo "Angka $x<br>";
}

//=+ penambahan angka 2
for ($x=1;$x<=10;$x+=2)
{
	echo "Angka $x<br>";
}

//=- pengurangan angka 2
for ($x=10;$x>=1;$x-=2)
{
	echo "Angka $x<br>";
}

//++ = artinya dihitung 1
for ($x=1;$x<=7;$x++)
{
	echo "<font size=$x>Ukuran font $x</font><br>";
}

//pengulangan jenis While
$x=1;
while($x<=10)
{
	echo "Angka $x <br>";
	$x++;
}

//pengulangan jenis do while
$x=1;
do 
{
	echo "Angka $x <br>";
	$x++;
} 
while ($x<=10);


//file variable.latihaninclude.php & Require
$cuaca="hujan";

?>