<?php
const CHECK_STATUS ='HADIR';

// const CHECK_NAMA_GORENGAN =[
// 'TAHU ISI', 'BALA BALA', 'RISOLES', 'BAKWAN', TRUE
// ];
// const STUDENT =[
//     'name'       => 'Arief',
//     'umur'        => 17,
//     'jabatan'       => 'Student',
//     'status'     => true

// ];
const USERS = [
    [
    'name'       => 'Aling',
    'umur'        => 17,
    'jabatan'       => 'Student',
    'status'     => true
    ], 

    [
        'name'       => 'Prider',
        'umur'        => 10,
        'jabatan'       => 'Student',
        'status'     => true
    ],

    [
    'name'       => 'Sbastian',
    'umur'        => 16,
    'jabatan'       => 'Student',
    'status'     => false
    ],
];
// $index =1;
// foreach  (USERS as $key => $value) {
//     echo "No," , $index++ . '<br>';
//     echo 'name: ' . $value ['name'] . '<br>';
//     echo 'umur: ' . $value ['umur'] . '<br>';
//     echo 'jabatan: ' . $value ['jabatan'] . '<br>';
//     echo 'status: ' . $value ['status'] . '<br>';
//     echo '<hr>';
// var_dump(USERS);
// }


    //Nilai constant menggunakan functio/method define
define('CHECK STATUS', 'HADIR');

define('NAMA_GORENGAN',[
//ARRAY BIASA
'TAHU ISI', 'BALA BALA', 'RISOLES', 'BAKWAN', TRUE
]);
//Menampilkan nilai define 
echo (CHECK_STATUS.'<hr>');
// output "Hadir"

//Menampilkan nillai Array biasa
foreach (NAMA_GORENGAN as $key => $value){
    echo $key .','. $value, '<hr>';
}
// output
// 0. 'TAHU ISI', 
// 1. 'BALA BALA', 
// 2. 'RISOLES', 
// 3. 'BAKWAN', 
// 4. TRUE
echo '<hr>';

define('USER',[
    'name'    => 'Arief',
    'umur'    => 17,
    'jabatan' => 'Student',
    'status'  => true,

]);
/* foreach (STUDENTS as $value){ */
    echo $value . '<br>';
    
   define('STUDENTS' , [
    [
        'name'        => 'Prider',
        'umur'        => 17,
        'jabatan'     => 'Student',
        'status'      => true
    ],
    [
        'name'        => 'Sbastian',
        'umur'        => 32,
        'jabatan'     => 'akuntan pajak',
        'status'      => true
    ],
    [
        'name'        => 'Aling',
        'umur'        => 35,
        'jabatan'     => 'HRD',
        'status'      => true
    ],

]);

foreach (STUDENTS as $key => $value) {
    echo 'No.'.'<br>';
    echo 'name:   ' . $value ['name'] . '<br>';
    echo 'umur:   ' . $value ['umur'] . '<br>';
    echo 'jabatan: '. $value ['jabatan'] . '<br>';
    echo 'status: '. $value ['status'] . '<br>';
    echo '<hr>';
}