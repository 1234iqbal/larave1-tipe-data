<?php

// contoh penggunaan function

function paket1(){
    echo 'nasi';
}

function paket2(){
    echo 'ayam';
}

echo paket1();

// penggunaan function dengan parameter / argument

function siswa($first_name){
    return $first_name;
}

echo siswa('jagung');
echo siswa('nasi');
echo siswa(); //error

// function dengan option parameter

function paketayam1($nama = 'ayam'){
    return $nama;
}

echo paketayam1('donat');
echo paketayam1(); // berhasil


// // function di dalam function

function paketA(){
    return "nasi goreng";
}

function paketB($paket){
    return ' babat '.$paket;
}

echo paketB(paketA());