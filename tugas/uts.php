<?php
function cetak_bintang($angka) {
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo '*';
        }
        echo "<br>";
    }
}

cetak_bintang(3);
?>



$numericalArray = array("mobil", "motor", "sepeda");
echo $numericalArray[0]; // Output: mobil
echo $numericalArray[1]; // Output: motor
echo $numericalArray[2]; // Output: sepeda



$associativeArray = array("nama" => "Abdul", "umur" => 30, "kota" => "Jakarta");
echo $associativeArray["nama"]; // Output: Abdul
echo $associativeArray["umur"]; // Output: 30
echo $associativeArray["kota"]; // Output: Jakarta

?>