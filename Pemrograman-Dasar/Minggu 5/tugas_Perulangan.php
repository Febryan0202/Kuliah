<?php

#Bagian A - Tabel Perkalian
    echo "Tabel Perkalian (for) " . "<br>";
    $angka = 4;
    for ($i=1; $i <= 10 ; $i++) { 
        $Hasil = $angka * $i;

        echo $angka . " X " . $i . " = " . $Hasil . "<br>";
    }

#Bagian B - Deret Angka
    echo "<br>" . "Deret Angka (while) 1-10" . "<br>";
    $i = 1;
    while ($i <= 10) {
        if ($i % 2==0) {
            echo "$i = Genap" . "<br>";
        } else {
            echo "$i = Ganjil" . "<br>";
        }
        $i++;
    }

    echo "<br>" . "Deret Angka (do while) 10-1" . "<br>";
$i = 10;
    do {
        if ($i % 2==0) {
            echo "$i = Genap" . "<br>";
        } else {
            echo "$i = Ganjil" . "<br>";
        }
        $i--;
    } while ($i >= 1);

#Bonus
    echo "<br>" . "BONUS" . "<br>";
    for ($i=1; $i <= 5 ; $i++) { 
        echo str_repeat ("*" , $i) . "<br>";
    }
?>