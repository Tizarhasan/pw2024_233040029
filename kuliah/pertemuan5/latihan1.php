<?php
// 1. membuat array
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$mahasiswa = ["tyezar", 3.3, false];


// 2. mencetak isi array
// mencetak 1 nilai pada array, menggunakan index
// index dimulai dari 0
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mahasiswa[1];
echo "<hr>";

// cetak semua isi array
// var_dump() atau print_r()
// digunakan saat debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($mahasiswa);
echo "<hr>";



// 3. memanipulasi isi array
// menambahkan isi array
// di akhir: [] atau array_push()
$hari[] = "Kamis";
$hari[] = "Jumat";
print_r($hari);
echo "<br>";
array_push($bulan, "April", "Mei");
print_r($bulan);
echo "<br>";

// di awal: array_unshift()
array_unshift($mahasiswa, "233040029");
print_r($mahasiswa);
echo "<hr>";


// menghapus isi array
// di depan array_pop()
// di belakang array_shift()
array_pop($hari);
array_shift($bulan);
print_r($hari);
echo "<br>";
print_r($bulan);