<?php

$nama = trim("  Budi Santoso  ");
$kata = explode(" ", $nama);
$depan    = $kata[0];
$belakang = end($kata);
 
$inisial  = strtoupper(substr($depan, 0, 1) . substr($belakang, 0, 1));
$username = strtolower(substr($depan, 0, 4) . substr($belakang, 0, 3));
 
// $inisial  = BS
// $username = budisan
