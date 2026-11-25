<?php

 # mencoba strlen
strlen(string $teks): int
 
echo strlen("Pemrograman");  // 11
echo strlen("");             // 0
echo strlen("a b");          // 3 (spasi dihitung)
echo strlen("Café");         // 5 (byte)

# membesarkan (strtoupper) atau mengecilkan huruf (strtolower)
echo strtoupper("ryan ganteng"); // RYAN GANTENG
echo strtolower("RYAN GANTENG"); // ryan ganteng

# membesarkan karakter awal kalimat (ucfirst) dan membesarkan karakter disetiap ada spasi (ucwords)
echo ucfirst("febryan Aswangga"); // Febryan aswangga
echo ucwords("febryan aswangga"); //Febryan Aswangga

# coba substr() mengambil potongan
substr(string $teks, int $mulai, ?int $panjang = null): string // Rumus

substr("Aetherion", 4, 4);  // erion , mulai indek 4 ambil  4 karakter
substr("Pemrograman", 4);  //ograman , Dari indeks 4 sampai akhir
substr("Pemrograman", -3); //man , 3 karakter terakhir
substr("Pemrograman", 2, 5) // mrogr  , Mulai indeks 2, ambil 5 karakter
substr("Pemrograman", 2, -2) // mrogram , Dari indeks 2, buang 2 karakter terakhir