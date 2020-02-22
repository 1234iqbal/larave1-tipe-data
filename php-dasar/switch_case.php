<?php

// switch case

/* perbandingan antara penggunaan if dan switch case */

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

// contoh penggunaan if

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

// contoh penggunaan switch case

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