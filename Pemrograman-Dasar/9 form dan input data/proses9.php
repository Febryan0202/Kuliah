<?php
$nama = $_POST["nama"] ?? "";
$menu = $_POST["menu"] ?? "Tidak Memilih";
$tingkat = $_POST["tingkat"] ?? "Tidak Memilih";
$toping = $_POST["toping"] ?? []; 

echo "====== RINGKASAN PESANAN ======" . "<br>" . "<br>";
echo "Nama Pemesan: " . htmlspecialchars($nama) . "<br>";
echo "Pilihan Menu: " . htmlspecialchars($menu) . "<br>";
echo "Tingkat Pedas: " . htmlspecialchars($tingkat) . "<br>";

echo "toping :";

if (count($toping) > 0) {
    foreach ($toping as $t) {
        echo "<li>$t</li>";
    }
} else {
    echo "-";
}

?>