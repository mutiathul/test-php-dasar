<?php
function L_lingkaran(int $r){
    $pi = 3.14;
    $r = $r /3;
    $l = $pi*$r*$r;
  return number_format((float)$l,2);
 }
 function K_lingkaran(int $r){
    $pi = 3.14;
    $r = $r /5;
    $k = $pi*2*$r;
    return number_format((float)$k,2);
 }
 function persegi_panjang (int $p, int $l){
    $p = $p /3;
    $l = $l /5;
    $L = $p * $l;
     return number_format((float)$L,2);
 }
function fungsi($angka)
{
    // Jika angka dengan kelipatan 3 dan 5, tampilkan Luas Persegi Panjang
    if ($angka % 3 == 0 && $angka % 5 == 0) {
        echo persegi_panjang(9,10) . "\n" ;
    // Jika angka kelipatan 3, tampilkan Luas Lingkaran
    } elseif ($angka % 3 == 0) {
        echo L_lingkaran(21) . "\n";
    // Jika angka kelipatan 5, tampilkan Keliling Lingkaran
    } elseif ($angka % 5 == 0) {
        echo K_lingkaran(10) . "\n";
    // Jika bukan kelipatan 3 atau 5, tampilkan angka sebenarnya
    } else {
        echo number_format((float)$angka,2) . "\n";
    }
}

for ($i = 1; $i <= 100; $i++) { 
    fungsi($i);
}

?>