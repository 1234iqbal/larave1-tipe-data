<?php

// contoh penggunaan continue untuk melewati sebuah perulangan
$karyawan = ['hario', 'rehan' , 'joko', 'budi'];
$find = 'budi';

foreach($karyawan as $karyawans){
    if($karyawans == $find){
        continue;
    }
    echo $karyawans. '<br>';
}