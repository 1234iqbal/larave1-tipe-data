<?php

// if statement ( kodisi )

// contoh 1
$siswa = 'tio';
$status = 'sakit';

if($status == 'hadir'){
    echo $siswa.' siswa ini hadir';
}else if($status == 'ijin'){
    echo $siswa.' siswa ini ijin';
}else if($status == 'sakit'){
    echo $siswa.' siswa ini sakit ';
}else{
    echo $siswa.' siswa ini tidak hadir ';
}

// contoh 2
$buah = 5;
$pembeli = 6;

if($buah > $pembeli){
    echo 'buah masih ada sisa';
}else{
    echo 'buah habis atau minus';
}