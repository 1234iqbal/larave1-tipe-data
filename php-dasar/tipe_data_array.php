<?php

// tipe data array

// data array
$siswa = array('joko', 'iqbal', 'tina', 5);
var_dump($siswa);

// array multi dimensi
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

