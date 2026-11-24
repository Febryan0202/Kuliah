<?php

$nama  = $_POST["nama"];
$umur  = $_POST["umur"];
$email = $_POST["email"];
 
echo "<h2>Data Diterima</h2>";
echo "Nama: $nama <br>";
echo "Umur: $umur tahun <br>";
echo "Email: $email <br>";
 
if ($umur >= 17) {
    echo "Status: Dewasa";
} else {
    echo "Status: Di bawah umur";
}
?>
