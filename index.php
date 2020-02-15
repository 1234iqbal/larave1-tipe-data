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

// $siswa = 'tio';
// $status = 'hadir';

// if($status == 'hadir'){
//     echo $siswa.' siswa ini hadir';
// }else if($status == 'ijin'){
//     echo $siswa.' siswa ini ijin';
// }else if($status == 'sakit'){
//     echo $siswa.' siswa ini sakit ';
// }else{
//     echo $siswa.' siswa ini tidak hadir ';
// }

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

// switch($status){
//     case 'hadir' :
//         echo $siswa.' siswa ini hadir';
//         echo "";
//         break;
//     case 'ijin' :
//         echo $siswa.' siswa ini ijin';
//         break;
//     case 'sakit' :
//         echo $siswa.' siswa ini sakit ';
//         break;
//     default :
//         echo $siswa.' siswa ini tidak hadir ';
//         break;
// }


// Aritmatika

// $nilai = 5;

// increment
// $nilai = $nilai + 1;
// $nilai += 3;
// $nilai++; 
// $nilai++;
// $nilai++;
// echo $nilai;

//decrement
// $nilai--; 
// $nilai--;
// $nilai--;

// % = modulus
// $modulus = 6 % 10;
// $modulus =  ( 2 +  5 ) * 5;
// echo $modulus;

// $nilai = 10;
// $total = 2 -  $nilai * ( 2  / 2 ) ;
// echo $modulus;


// for loop

// rumus dasar
// for($i; $i < $total; $i++){
//     echo;
// }

// $jumlah = 11;
// for( $i = 1; $i <= $jumlah; $i +=3 ){
//     echo "hello world".$i.'<br>';
// }

// $siswa = ['doni', 'rio', 'lina','desi','iqbal'];

// for($i = 0; $i < count($siswa); $i+=2 ){
//     echo $siswa[$i].'<br>';
// }

// $siswa = "";
// $siswa += 1;
// echo $siswa;

// if( $siswa ){
//     echo "ini benar";
// }else{
//     echo "ini salah";
// }


// while

// infinity loop
// while(true){
//     echo "hello world";
// }

//perulangan while
// $start = 1;
// $end = 10;

// $jumlah = 1;
// while( $start <= $end ){
//     echo $start." hello world".'<br>';

//     $start+= $jumlah;
//     $start++;
// }

// perulangan do while
// do{
//     echo $start.'selesai'.'<br>';
//     $start++;
// }while($start <= $end);

// perulangan foreach

// perulangan array
// $karyawanIwan = ['hario', 'rehan' , 'joko', 'budi'];

// foreach($karyawan as $karyawans){
//     echo $karyawans. '<br>';
// }

//perulangan array di dalam array
// $karyawan = [
//     ['name' => 'hario'],
//     ['name' => 'rehan'],
//     ['name' => 'joko'],
//     ['name' => 'budi']
// ];

// foreach($karyawan as $karyawans){
//     echo $karyawans['name']. '<br>';
// }

// $karyawan = [
//     [
//         'name' => 'hario',
//         'age'  => 26,
//         'job'  => [ 
//                 [ 'pekerjaan1' => 'developer'] ,
//                 [ 'pekerjaan2' => 'OB'] 
//             ]
//         ],
//     [
//         'name' => 'rehan',
//         'age'  => 23,
//         'job'  => [ 
//                 [ 'pekerjaan1' => 'developer'] ,
//                 [ 'pekerjaan2' => 'OB'] 
//             ]
//     ],
//     [
//         'name' => 'joko',
//         'age'  => 28,
//         'job'  => [ 
//                 [ 'pekerjaan1' => 'developer'] ,
//                 [ 'pekerjaan2' => 'OB'] 
//             ]
//     ]
// ];

// foreach($karyawan as $key => $karyawans){
//     echo $key+=1;
//     echo $karyawans['name']. '<br>';
//     echo $karyawans['age']. '<br>';
//     foreach( $karyawans['job'] as $job){
//         echo $job['pekerjaan1']."<br>";
//         break;
//     }
// }


// breaking
// $karyawan = ['hario', 'rehan' , 'joko', 'budi'];
// $find = 'rehan';

// foreach($karyawan as $karyawans){
//     echo $karyawans. '<br>';
//     if($karyawans == $find){
//         break;
//     }
// }

// // continue
// $karyawan = ['hario', 'rehan' , 'joko', 'budi'];
// $find = 'budi';

// foreach($karyawan as $karyawans){
//     if($karyawans == $find){
//         continue;
//     }
//     echo $karyawans. '<br>';
// }


// dumping data

// $siswa = ['tyo', 'rama', 'joko'];
// echo "<pre>", var_dump($siswa) ,"</pre>";

// function

// function paket1(){
//     echo 'nasi';
// }

// function paket2(){
//     echo 'ayam';
// }

// echo paket1();

// function dengan parameter / argument

// function siswa($first_name){
//     return $first_name;
// }

// echo siswa('jagung');
// echo siswa('nasi');
// echo siswa(); //error

// function dengan option parameter

// function paket1($nama = 'ayam'){
//     return $nama;
// }

// echo paket1('donat');
// echo paket1(); // berhasil

// function di dalam function

// function paket1(){
//     return "nasi goreng";
// }

// function paket2($paket){
//     return ' babat '.$paket;
// }

// echo paket2(paket1());
