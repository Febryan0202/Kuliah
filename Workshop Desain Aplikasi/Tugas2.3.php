<?php
    $Kehadiran = 80;
    $Nilai_Tugas = 70;

    $Boleh_Ujian = $Kehadiran >= 75 && $Nilai_Tugas >= 60;

    Var_dump($Boleh_Ujian);

    #No2
    $Kehadiran = 70;
    $Nilai_Tugas = 80;

    $Boleh_Ujian = $Kehadiran >= 75 && $Nilai_Tugas >= 60;

    Var_dump($Boleh_Ujian);

    #No 3 
    $Kehadiran = 90;
    $Nilai_Tugas = 50;

    $Boleh_Ujian = $Kehadiran >= 75 && $Nilai_Tugas >= 60;

    Var_dump($Boleh_Ujian);

    #No 4
    $Kehadiran = 60;
    $Nilai_Tugas = 40;

    $Boleh_Ujian = $Kehadiran >= 75 && $Nilai_Tugas >= 60;

    Var_dump($Boleh_Ujian);
?>