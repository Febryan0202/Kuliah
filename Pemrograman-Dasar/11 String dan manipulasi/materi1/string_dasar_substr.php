<?php

#substr

$kode = "INF-2026-0042";
 
echo substr($kode, 0, 3), "<br>";   // INF
echo substr($kode, 4, 4), "<br>";   // 2026
echo substr($kode, -4), "<br>";     // 0042
echo substr($kode, 4), "<br>";      // 2026-0042
