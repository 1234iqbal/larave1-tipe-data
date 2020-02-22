<?php

// concatination

$siswa = 'doni';
$kelas = 'laravel';
$laravel = 1;
$kalimat = 'aku '.'dia';

echo "$siswa $kelas".'A';

// penggunaan kalibrate
echo "dia $siswa mempunyai kelas $kelas {$laravel}A";

// menggabungkan 2 kalimat dengan karakter ( , )
echo "dia $siswa mempunyai kelas $kelas", $laravel;
echo $kalimat;