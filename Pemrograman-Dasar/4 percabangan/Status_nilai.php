<?php
    $Nilai = 87;

    if ($Nilai >= 90) {
        $Grade = "A";
    } elseif ($Nilai >= 80) {
        $Grade = "B";
    } elseif ($Nilai >= 70) {
        $Grade = "C";
    } elseif ($Nilai >= 60) {
        $Grade = "D";
    } else {
        $Grade = "E"; 
    }
        
    #Status
    if ($Nilai >= 75) {
        $Status = "Lulus";
    } else {
        $Status = "Tidak Lulus";
    }

    echo "Nilai : " . $Nilai . "<br>";
    echo "Grade : " . $Grade . "<br>";
    echo "Status : " . $Status . "<br>";
?>