<?php

// oprator perbandingan

// == namanya double equals
// === namanya triple equals
// <= operator lebih kecil atau sama dengan
// >= operator lebih besar atau sama dengan

// contoh perbandingan dengan equals
$siswa = false;
var_dump($siswa);
if( $siswa == true ){
   echo "ini benar"; 
}


// contoh perbandingan dengan operator lebih kecil dan lebih besar
$roti = 5;
$pelanggan = 5;

if($pelanggan <= $roti ){
    echo "roti ini stock tersedia";
}else{
    echo "roti habis";
}