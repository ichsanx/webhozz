<?php
//array
$mahasiswa = array("Putra","Laki-laki","24/01/1988","B",3.41,"Teknik Elektro");
for ($x=0;$x<=6;$x++)
{
	echo $mahasiswa [$x]."<br>";
}


$mahasiswa=array("Putra","Laki-laki","24/01/1988","B",3.14,"Teknik Elektro");
echo $mahasiswa [0]."<br>";
echo $mahasiswa [1]."<br>";
echo $mahasiswa [2]."<br>";
echo $mahasiswa [3]."<br>";
echo $mahasiswa [4]."<br>";
echo $mahasiswa [5]."<br>";

echo "<br>";

//foreach
$mahasiswa = array("Putra","Laki-laki","24/01/1988","B",3.41,"Teknik Elektro");
foreach ($mahasiswa as $datamahasiswa)
{
	echo $datamahasiswa."<br>";
}

echo "<br>";

//mengurutkan array atau mengaktifkan fungsi sort
$data = array(1,3,2,4,7,8,6,5,9,10);
sort($data);
for($x=0;$x<=10;$x++)
{
	echo current ($data)."<br>";
	next($data);
}

//mengakses array dalam variable yang terpisah
$mahasiswa = array("Putra","Laki-laki","24/01/1988","B",3.41,"Teknik Elektro");
list($nama,$jeniskelamin,$tanggallahir,$poin,$IP,$spesialisasi) = $mahasiswa;
echo $nama."<br>";
echo $jeniskelamin."<br>";
echo $tanggallahir."<br>";
echo $poin."<br>";
echo $IP."<br>";
echo $spesialisasi."<br>";



?>