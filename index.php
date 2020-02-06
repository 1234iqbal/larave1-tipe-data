<?php

// tipe data string

// $siswa = "nama";
// echo "$nama saya $siswa";


// tipe data integer

// $jumlah = -5;
// $orang = 10;
// echo "$orang orang beli $jumlah buah";

// tipe data float

$harga = 5e5;
// $jumlah = 3.14;
// echo "roti ini harganya $harga";

// tipe data boolean

// $data = false;
// if($data){
//     echo "hello world";
// }

// tipe data array

$siswa = array('joko', 'iqbal', 'tina', 5);
$siswa1 = [
    'siswa1' => 'joko', 
    'siswa2' => 'iqbal', 
    'siswa3' => "tina", 
    'kelas' => [
        'nama'  => 'rini', 
        'kelas' => 10,
        'alamat' => 'semarang',
        'perusahaan' => [
            'nama' =>'semarang'
        ]
    ],
    'no' => 5, 
    'harga' => 2e3, 
    true,

];

$siswa1['harga'] = 'tio';
$siswa1['harga'] = 'tio';
$siswa1['harga'] = 'tio';


echo $siswa1[1].'<br/>';
var_dump($siswa1);