<?php
    $buah = ["Apel", "Jeruk", "Mangga"];

    echo "Data Awal : " . "<br>";

    foreach ($buah as $i) {
        echo $i . "<br>";
    }

    #Data Baru
    $buah[3] = "Pisang";
    $buah[4] = "Semangka";
    $buah[5] = "Stroberi";

    echo "<br>Data Baru :<br> ";

    foreach ($buah as $i) {
        echo $i . "<br>";
    }
?>