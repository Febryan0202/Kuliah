<?php

# untuk menyamarkan data
 
$hp = "081234567890";
echo substr($hp, 0, 4)
   . str_repeat("*", strlen($hp) - 7)
   . substr($hp, -3);
// 0812*****890
 
$email = "budi@kampus.ac.id";
$at = strpos($email, "@");
echo substr($email, 0, 2)
   . str_repeat("*", $at - 2)
   . substr($email, $at);
// bu**@kampus.ac.id
