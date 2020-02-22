<?php

// perulangan foreach

// perulangan array
$karyawanIwan = ['hario', 'rehan' , 'joko', 'budi'];

foreach($karyawan as $karyawans){
    echo $karyawans. '<br>';
}

// perulangan multiple array

$karyawan = [
    ['name' => 'hario'],
    ['name' => 'rehan'],
    ['name' => 'joko'],
    ['name' => 'budi']
];

foreach($karyawan as $karyawans){
    echo $karyawans['name']. '<br>';
}

// perulangan array di dalam array

$karyawan = [
    [
        'name' => 'hario',
        'age'  => 26,
        'job'  => [ 
                [ 'pekerjaan1' => 'developer'] ,
                [ 'pekerjaan2' => 'OB'] 
            ]
        ],
    [
        'name' => 'rehan',
        'age'  => 23,
        'job'  => [ 
                [ 'pekerjaan1' => 'hasler'] ,
                [ 'pekerjaan2' => 'OB'] 
            ]
    ],
    [
        'name' => 'joko',
        'age'  => 28,
        'job'  => [ 
                [ 'pekerjaan1' => 'disainer'] ,
                [ 'pekerjaan2' => 'OB'] 
            ]
    ]
];

foreach($karyawan as $key => $karyawans){
    echo $key+=1;
    echo $karyawans['name']. '<br>';
    echo $karyawans['age']. '<br>';
    foreach( $karyawans['job'] as $job){
        echo $job['pekerjaan1']."<br>";
        break;
    }
}