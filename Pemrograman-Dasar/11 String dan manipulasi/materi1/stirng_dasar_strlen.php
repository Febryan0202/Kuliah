<?php

#strlen

$kalimat = "  Belajar PHP Itu Seru  ";
 
echo strlen($kalimat), "<br>";            // 24
echo strlen(trim($kalimat)), "<br>";      // 20
echo strtoupper($kalimat), "<br>";        // BELAJAR PHP ITU SERU
echo strtolower(trim($kalimat)), "<br>";  // belajar php itu seru
