<?php 
echo "Hallo semuanya!"; 
?> 

<?php 
//Ini adalah komentar yg akan diabaikan 
/* 
Dan ini adalah 
satu blok komentar 
*/ 
?> 

<?php 
//Variabel String
$teks = "Hallo semuanya!"; 
echo $teks; 
?> 

<?php 
//Operator Penggabungan String
$teks = "Hallo semuanya!"; 
$teks2= "12345"; 
echo $teks . " " .$teks2; 
?> 

<?php 
//Mengetahui Panjang String
echo strlen("Hallo semuanya!"); 
?> 

<?php 
//Mencari Karakter Di Dalam String
echo strpos("Hallo semuanya!","semua"); 
?>

<?php 
//Array Numerik
$nama[0] = "Joko"; 
$nama[1] = "Parto"; 
$nama[2] = "Jono"; 
echo $nama[1]." dan ".$nama[2]." adalah tetangga Pak ".$nama[0]; 
?> 

<?php
//Array Asosiatif
$umur = array("Joko"=>33, "Parto"=>35, "Jono"=>29); 
echo $umur["Parto"]; 
?>

<?php
//Array Multidimensi
$keluarga = array 
( "Joko"=>array 
( "Jojon", "Joni", "Joana" ), 
"Parto"=>array 
( "Parmi" ), 
"Warto"=>array 
( "Warman", "Warno", "Warmin" ) 
);
echo $keluarga["Joko"][2] ." adalah anggota keluarga Joko"; 
?>

<?php 
//Menggunakan If-Else
$d=date("D"); 
if ($d == "Mon") 
    echo "Selamat berakhir pekan!"; 
else 
    echo "Semoga hari anda menyenangkan!"; 
?> 

<?php 
//Menggunakan Else-If
$d=date("D"); 
if ($d=="Mon") 
echo "Selamat berakhir pekan!"; 
elseif ($d=="Sun") 
echo "Semoga hari Minggu anda menyenangkan!"; 
else 
echo "Semoga hari anda menyenangkan!"; 
?> 

<?php 
//Menggunakan Switch
$x = 2; 
switch ($x) 
{ 
case 1: echo "Angka 1"; 
break; 
case 2: echo "Angka 2"; 
break; 
case 3: echo "Angka 3"; 
break; 
default:echo "Bukan angka antara 1 sampai 3"; 
} 
?> 

<?php
//Menggunakan While 
$i=1; 
while($i<=5) 
{ echo "Angka " . $i . "<br />";  
$i++; 
} 
?> 

<?php 
//Menggunakan Do-While
$i=1; 
do 
{ 
$i++; 
echo "Angka " . $i . "<br />"; 
} 
while ($i<5); 
?> 

<?php 
//Menggunakan For
for ($i=1; $i<=5; $i++) 
{ 
echo "Hello World!<br />"; 
} 
?> 

<?php 
//Menggunakan Foreach
$arr=array("satu", "dua", "tiga"); 
foreach ($arr as $nilai) 
{ 
echo "Nilai: " . $nilai . "<br />"; 
} 
?> 

<?php 
//Menggunakan Function
function tulisNama() 
{ 
echo "Merapi"; 
} 
tulisNama(); 
?> 





