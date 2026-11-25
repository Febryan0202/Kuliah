<?php
$Nama = $_POST["Nama"] ?? "";
$Email = $_POST["Email"] ?? "";
$NomorHP = $_POST["NomorHP"] ?? "";
$Umur = $_POST["Umur"] ?? "";
$URL = $_POST["URL"] ?? "";

echo "====== RINGKASAN PESERTA ======" . "<br>" . "<br>";
echo "Nama Peserta: " . htmlspecialchars($Nama) . "<br>";
echo "Email Pendaftar: " . htmlspecialchars($Email) . "<br>";
echo "Nomor HP: " . htmlspecialchars($NomorHP) . "<br>";

echo "Umur Peserta: " . htmlspecialchars($Umur) . "<br>";
echo "Link GitHub: " . htmlspecialchars($URL) . "<br>";


#Nama 30 sampai 50 Karakter
$ErrorNama = "";
    if ($Nama === "") {
        $ErrorNama = "Nama wajib diisi.";
    } elseif(strlen($Nama) < 3) {
        $ErrorNama = "Nama minimal 3 karakter.";
    } elseif (strlen($Nama) > 50) {
        $ErrorNama = "Nama maksimal 50 karakter.";
    }
    if ($ErrorNama !== "") {
    echo $ErrorNama;
    }

#Nomor HP
$Nomor = "";
    if (preg_match('/^08[0-9]{9,11}$/' , $NomorHP )) {
        $Nomor = "Nomor hp valid";
    } else {
        $Nomor = "Nomor hp tidak Valid";
    }
    if ($Nomor !== "") {
        echo "<br>" . $Nomor;
    }


#Umur

#URL GitHub


?>