<?php
    function NilaiAkhir ($tugas, $uts, $uas) {
        return ($tugas * 0.30) +
               ($uts * 0.30) +
               ($uas * 0.40); 
    }

    function Grade ($nilaiAkhir) {
        if ($nilaiAkhir >= 90) {
            return "A";
        } elseif ($nilaiAkhir >= 80) {
            return "B";
        } elseif ($nilaiAkhir >= 70) {
            return "C";
        } elseif ($nilaiAkhir >=  60) {
            return "D";
        } else {
            return "E";
        }
    }

    function Status ($nilaiAkhir) {
        if ($nilaiAkhir >= 75) {
            return "Lulus";
        } else {
            return "Tidak Lulus";
        }
    }

    function Hasil ($nama, $tugas, $uts, $uas) {
        $nilaiAkhir = NilaiAkhir($tugas, $uts, $uas);
        $Grade = Grade($nilaiAkhir);
        $Status = Status($nilaiAkhir);
        
        
        echo "Nama :" . $nama . "<br>";
        echo "Tugas :" . $tugas . "<br>";
        echo "Uts :" . $uts . "<br>";
        echo "Uas :" . $uas . "<br>";
        echo "Nilai Akhir :" . $nilaiAkhir . "<br>";
        echo "Grade :" . $Grade . "<br>";
        echo "Status :" . $Status . "<br>";
        echo "<br>";
    }

    $Mahasiswa = [
        [ 
            "Nama" => "Febryan Aswangga",
            "Tugas" => 90,
            "Uas" => 95,
            "Uts" => 87
        ],
        [
            "Nama" => "Iqbal Rizky",
            "Tugas" => 75,
            "Uas" => 65,
            "Uts" => 60
        ],
        [
            "Nama" => "Ezhar maulana",
            "Tugas" => 95,
            "Uas" => 80,
            "Uts" =>89, 
        ]
    ];
    
    foreach ($Mahasiswa as $Mhs) {
        Hasil(
            $Mhs["Nama"],
            $Mhs["Tugas"],
            $Mhs["Uas"],
            $Mhs["Uts"]
        );
    }
?>