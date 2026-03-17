<?php

use Illuminate\Support\Facades\Route;
use Laravel\Mcp\Enums\Role;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    echo "Halaman Home <br>";
    return "Baris kedua";
});

Route::get('/mahasiswa/ti/udin', function() {
    echo "Selamat Datang Udin";
});
//route parameter
Route::get('/mahasiswa/{nama}', function ($nama){
    return "Selamat Datang $nama";
});

Route::get('/mahasiswa/{nama}/{nim}', function ($nama,$nim){
    return "Selamat Datang $nama, NIM: $nim";
});
//route optional parameter
Route::get('/dosen/{nama?}/{nip?}', function ($nama = "",$nip = ""){
    return "Selamat Datang $nama, NIP: $nip";
});
//regular expresion

//route redirect

Route::redirect('/home', '/');

//route fallback

//Route::fallback(function(){
 //   return "Halaman tidak di temukan";
//});

/* Route::get('/mahasiswa', function() {
    $arrMhs=[
        'mhs1' => 'Mark Zuckerberg',
        'mhs2' => 'Taylor Swift',
        'mhs3' => 'Beyonce',
    ];
    return view('akademik.mahasiswa')->with($arrMhs); //ini menggunakan method with untuk mengirim data ke view
    // return view('akademik.mahasiswa',$arrMhs);    ini menggunakan parameter kedua untuk mengirim data ke view
});
*/

Route::get('/mahasiswa', function() {
    $nama='Taylor Swift';
    $nim='2401091007';
    $total_nilai=70;
    return view('akademik.nilai_mahasiswa', compact ('nama', 'nim', 'total_nilai'));
});


Route::get('/perulangan', function(){
    return view('akademik.perulangan');
});

Route::get('/perulangan', function() {
    $nama='Taylor Swift';
    $nim='2401091007';
    $total_nilai=[60,80,40];
    return view('akademik.perulangan', compact ('nama', 'nim', 'total_nilai'));
});