<?php
    $DataMahasiswa = [
        [ 
        "nama" => "Febryan",
        "NIM" => "E41262717",
        "Tugas" => 90,
        "uts" => 85,
        "uas" => 87 
        ],
        [ 
        "nama" => "Ghezio",
        "NIM" => "T1234567",
        "Tugas" => 85, 
        "uts" => 87, 
        "uas" => 84 
        ],
        [ 
        "nama" => "Aswangga", 
        "NIM" => "E1098765", 
        "Tugas" => 87, 
        "uts" => 90, 
        "uas" => 90
        ],
        [ 
        "nama" => "Iqbal Rizky", 
        "NIM" => "U5678910", 
        "Tugas" => 79, 
        "uts" => 85, 
        "uas" => 88 
        ],
        [ 
        "nama" => "Fachry Bahtiar", 
        "NIM" => "T12345678", 
        "Tugas" => 90, 
        "uts" => 88, 
        "uas" => 85 
        ]
    ];

    

 echo "Data Nilai Mahasiswa";

echo "<table border='1' cellpadding='8'>";

echo "<tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Tugas</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>Nilai Akhir</th>
      </tr>";

      $no = 1;
$tertinggi = 0;
$nama_tertinggi = "";

 foreach ($DataMahasiswa as $mhs) {

    $nilai_akhir = ($mhs["Tugas"] * 0.30) +
                   ($mhs["uts"] * 0.30) +
                   ($mhs["uas"] * 0.40);

    echo "<tr>
        <td>$no</td>
        <td>{$mhs["nama"]}</td>
        <td>{$mhs["NIM"]}</td>
        <td>{$mhs["Tugas"]}</td>
        <td>{$mhs["uts"]}</td>
        <td>{$mhs["uas"]}</td>
        <td>$nilai_akhir</td>
    </tr>";

    if ($nilai_akhir > $tertinggi) {
        $tertinggi = $nilai_akhir;
        $nama_tertinggi = $mhs["nama"];
    }

    $no++;
}

    echo "</table>";

    echo "<br>" . "Mahasiswa dengan Nilai Akhir Tertinggi" . "<br>" . "<br>";
    echo "Nama: $nama_tertinggi<br>";
    echo "Nilai Akhir: $tertinggi";

?>