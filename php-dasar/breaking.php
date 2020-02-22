<?php

// contoh penggunaan breaking untuk menghetikan perulangan
$karyawan = ['hario', 'rehan' , 'joko', 'budi'];
$find = 'rehan';

foreach($karyawan as $karyawans){
    echo $karyawans. '<br>';
    if($karyawans == $find){
        break;
    }
}