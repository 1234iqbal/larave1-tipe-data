<?php

// for loop

// rumus dasar
for($i; $i < $total; $i++){
    echo $i;
}

// contoh kasus penggunaan for loop
$jumlah = 11;
for( $i = 1; $i <= $jumlah; $i +=3 ){
    echo "hello world".$i.'<br>';
}


// contoh kasus penggunaan for loop untuk data array

$siswa = ['doni', 'rio', 'lina','desi','iqbal'];

for($i = 0; $i < count($siswa); $i+=2 ){
    echo $siswa[$i].'<br>';
}

$siswa = "";
$siswa += 1;
echo $siswa;


// perumpamaan jika kita menggunakan if else untuk mencari benar atau salah
if( $siswa ){
    echo "ini benar";
}else{
    echo "ini salah";
}