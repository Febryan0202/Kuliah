<?php

// Fungsi menghitung nilai akhir
function hitungNilaiAkhir($tugas, $uts, $uas) {
    return ($tugas * 30 / 100) +
           ($uts * 30 / 100) +
           ($uas * 40 / 100);
}

// Fungsi menentukan grade
function tentukanGrade($nilaiAkhir) {
    if ($nilaiAkhir >= 90) {
        return "A";
    } elseif ($nilaiAkhir >= 80) {
        return "B";
    } elseif ($nilaiAkhir >= 70) {
        return "C";
    } elseif ($nilaiAkhir >= 60) {
        return "D";
    } else {
        return "E";
    }
}

// Fungsi menentukan status
function tentukanStatus($nilaiAkhir) {
    if ($nilaiAkhir >= 75) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}

// Fungsi menampilkan hasil
function tampilkanHasil($nama, $tugas, $uts, $uas) {
    $nilaiAkhir = hitungNilaiAkhir($tugas, $uts, $uas);
    $grade = tentukanGrade($nilaiAkhir);
    $status = tentukanStatus($nilaiAkhir);

    echo "Nama: $nama <br>";
    echo "Nilai Tugas: $tugas <br>";
    echo "Nilai UTS: $uts <br>";
    echo "Nilai UAS: $uas <br>";
    echo "Nilai Akhir: $nilaiAkhir <br>";
    echo "Grade: $grade <br>";
    echo "Status: $status <br>";
    echo "<br>";
}

// Array data mahasiswa
$mahasiswa = [
    [
        "nama" => "Febryan",
        "tugas" => 84,
        "uts" => 88,
        "uas" => 90
    ],
    [
        "nama" => "Emilia",
        "tugas" => 90,
        "uts" => 70,
        "uas" => 90
    ],
    [
        "nama" => "Aswangga",
        "tugas" => 25,
        "uts" => 70,
        "uas" => 60
    ]
];

// Memanggil fungsi untuk setiap mahasiswa
foreach ($mahasiswa as $mhs) {
    tampilkanHasil(
        $mhs["nama"],
        $mhs["tugas"],
        $mhs["uts"],
        $mhs["uas"]
    );
}
?>