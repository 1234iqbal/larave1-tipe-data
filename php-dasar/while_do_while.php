<?php

// while

// infinity loop contoh penggunaan while
while(true){
    echo "hello world";
}

// contoh kasus perulangan while
$start = 1;
$end = 10;

$jumlah = 1;
while( $start <= $end ){
    echo $start." hello world".'<br>';

    $start+= $jumlah;
    $start++;
}

// do while
do{
    echo 'selesai';
}while(false);

// perulangan do while
do{
    echo $start.'selesai'.'<br>';
    $start++;
}while($start <= $end);