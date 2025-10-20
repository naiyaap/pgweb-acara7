<?php
// Array berisi nama kecamatan
$arr = array(
    "Moyudan", "Minggir", "Seyegan", "Godean", "Gamping",
    "Mlati", "Depok", "Berbah", "Prambanan", "Kalasan",
    "Ngemplak", "Ngaglik", "Sleman", "Tempel", "Turi",
    "Pakem", "Cangkringan"
);

// Buat tabel
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>No</th><th>Kecamatan</th></tr>";

$no = 1;
foreach ($arr as $kecamatan) {
    echo "<tr>";
    echo "<td>$no</td>";
    echo "<td>$kecamatan</td>";
    echo "</tr>";
    $no++;
}

echo "</table>";
?>
