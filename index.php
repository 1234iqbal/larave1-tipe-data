<?php

// tipe data string

// $siswa = "nama";
// echo "$nama saya $siswa";


// tipe data integer

// $jumlah = -5;
// $orang = 10;
// echo "$orang orang beli $jumlah buah";

// tipe data float

// $harga = 5e5;
// $jumlah = 3.14;
// echo "roti ini harganya $harga";

// tipe data boolean

// $data = false;
// if($data){
//     echo "hello world";
// }

// tipe data array

// $siswa = array('joko', 'iqbal', 'tina', 5);
// $siswa1 = [
//     'siswa1' => 'joko', 
//     'siswa2' => 'iqbal', 
//     'siswa3' => "tina", 
//     'kelas' => [
//         'nama'  => 'rini', 
//         'kelas' => 10,
//         'alamat' => 'semarang',
//         'perusahaan' => [
//             'nama' =>'semarang'
//         ]
//     ],
//     'no' => 5, 
//     'harga' => 2e3, 
//     true,

// ];

// $siswa1['harga'] = 'tio';
// $siswa1['harga'] = 'tio';
// $siswa1['harga'] = 'tio';


// echo $siswa1[1].'<br/>';
// var_dump($siswa1);

// tipe data null

// $siswa = Null;
// var_dump($siswa);

// concatination

// $siswa = 'doni';
// $kelas = 'laravel';
// $laravel = 1;
// $kalimat = 'aku '.'dia';

// echo "$siswa $kelas".'A';
// echo "dia $siswa mempunyai kelas $kelas {$laravel}A";
// echo "dia $siswa mempunyai kelas $kelas", $laravel;
// echo $kalimat;

// if statement

// $siswa = 'tio';
// $status = 'sakit';

// if($status == 'hadir'){
//     echo $siswa.' siswa ini hadir';
// }else if($status == 'ijin'){
//     echo $siswa.' siswa ini ijin';
// }else if($status == 'sakit'){
//     echo $siswa.' siswa ini sakit ';
// }else{
//     echo $siswa.' siswa ini tidak hadir ';
// }

// $buah = 5;
// $pembeli = 6;

// if($buah > $pembeli){
//     echo 'buah masih ada sisa';
// }else{
//     echo 'buah habis atau minus';
// }

// Operator Logika

// oprator and = &&

// $siswa1 = 'doni';
// if($siswa1 == 'tio' && true){
//     echo "ini benar";
// }else{
//     echo "ini salah";
// }

// $email = 'mifjak1@gmail.com';
// $password = "1234ab";
// if($email == 'mifjak1@gmail.com' && $password == "1234abc"){
//     echo "login sukses";
// }else{
//     echo "login gagal";
// }

// oparator OR = ||

// $siswa1 = 'siti';
// if($siswa1 == 'doni' || $siswa1 == 'tio' || $siswa1 == 'siti'){
//     echo "ini benar";
// }else{
//     echo "ini salah";
// }

// $email = 'mifjak1@gmail.co';
// $password = "1234ab";

// if($email == 'mifjak1@gmail.com' || $password == "1234abc"){
//     echo "login sukses";
// }else{
//     echo "login gagal";
// }


// oprator perbandingan

// == namanya double equals
// === namanya triple equals
// <= operator lebih kecil atau sama dengan
// >= operator lebih besar atau sama dengan

// $siswa = false;

// var_dump($siswa);
// if( $siswa == true ){
//    echo "ini benar"; 
// }

// $roti = 5;
// $pelanggan = 5;

// if($pelanggan <= $roti ){
//     echo "roti ini stock tersedia";
// }else{
//     echo "roti habis";
// }

// switch case

$siswa = 'tio';
$status = 'hadir';

if($status == 'hadir'){
    echo $siswa.' siswa ini hadir';
}else if($status == 'ijin'){
    echo $siswa.' siswa ini ijin';
}else if($status == 'sakit'){
    echo $siswa.' siswa ini sakit ';
}else{
    echo $siswa.' siswa ini tidak hadir ';
}

// kerangka dasar if

// if(){
//      echo "";
// }else{
//      echo "";
// }

// kerangka dasar switch case

// switch(){
//     case :
//     break;
//     default:
//     break;
// }

switch($status){
    case 'hadir' :
        echo $siswa.' siswa ini hadir';
        echo "";
        break;
    case 'ijin' :
        echo $siswa.' siswa ini ijin';
        break;
    case 'sakit' :
        echo $siswa.' siswa ini sakit ';
        break;
    default :
        echo $siswa.' siswa ini tidak hadir ';
        break;
}