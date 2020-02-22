<?php

// Operator Logika

// contoh penggunaan oprator and = &&

$siswa1 = 'doni';
if($siswa1 == 'tio' && true){
    echo "ini benar";
}else{
    echo "ini salah";
}

$email = 'mifjak1@gmail.com';
$password = "1234ab";
if($email == 'mifjak1@gmail.com' && $password == "1234abc"){
    echo "login sukses";
}else{
    echo "login gagal";
}

// contoh penggunaan oparator OR = ||

$siswa1 = 'siti';
if($siswa1 == 'doni' || $siswa1 == 'tio' || $siswa1 == 'siti'){
    echo "ini benar";
}else{
    echo "ini salah";
}

$email = 'mifjak1@gmail.co';
$password = "1234ab";

if($email == 'mifjak1@gmail.com' || $password == "1234abc"){
    echo "login sukses";
}else{
    echo "login gagal";
}