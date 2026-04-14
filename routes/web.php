<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/insertsql', [MahasiswaController::class, 'insertSql']);
    
Route::get('/prepared', [MahasiswaController::class, 'insertPrepared']);

Route::get('/binding', [MahasiswaController::class, 'insertBinding']);

Route::get('/update', [MahasiswaController::class, 'update']);

Route::get('/delete', [MahasiswaController::class, 'delete']);

Route::get('/select', [MahasiswaController::class, 'select']);

Route::get('/selecttampil', [MahasiswaController::class, 'selectTampil']);

Route::get('/selectview', [MahasiswaController::class, 'selectView']);

*/
Route::get('/pnp/{jurusan}/{prodi}', function($jurusan,$prodi){
    $data=[$jurusan,$prodi];
    return view('akademik.prodi')->with('data',$data);
}) ->name('prodi');

Route::get('/selectwhere', [MahasiswaController::class, 'selectWhere']);

Route::get('/statement', [MahasiswaController::class, 'statement']);



Route::get('/insertdosen', [DosenController::class, 'insertDosen']);
Route::get('/insert-banyak-dosen', [DosenController::class, 'insertBanyakDosen']);
Route::get('/update-dosen', [DosenController::class, 'updateDosen']);
Route::get('/update-where-dosen', [DosenController::class, 'updateWhereDosen']);
Route::get('/update-or-insert', [DosenController::class, 'updateOrInsert']);
Route::get('/delete-dosen', [DosenController::class, 'deleteDosen']);
Route::get('/get', [DosenController::class, 'get']);
Route::get('/get-view', [DosenController::class, 'getView']);
Route::get('/get-view-r', [DosenController::class, 'getViewR']);
Route::get('/get-where', [DosenController::class, 'getwhere']);
Route::get('/select-dosen', [DosenController::class, 'selectDosen']);
Route::get('/take', [DosenController::class, 'take']);
Route::get('/first', [DosenController::class, 'first']);
Route::get('/find', [DosenController::class, 'find']);
Route::get('/raw', [DosenController::class, 'raw']);


Route::get('/insert', [MahasiswaController::class, 'insert']);
Route::get('/mass-assignment', [MahasiswaController::class, 'massAssignment']);
Route::get('/update', [MahasiswaController::class, 'update']);
Route::get('/update-where', [MahasiswaController::class, 'updateWhere']);
Route::get('/mass-update', [MahasiswaController::class, 'massUpdate']);
Route::get('/delete', [MahasiswaController::class, 'delete']);
Route::get('/destroy', [MahasiswaController::class, 'destroy']);
Route::get('/mass-delete', [MahasiswaController::class, 'massDelete']);
Route::get('/all', [MahasiswaController::class, 'all']);
Route::get('/allview', [MahasiswaController::class, 'allview']);
Route::get('/where', [MahasiswaController::class, 'where']);
Route::get('/first', [MahasiswaController::class, 'first']);
Route::get('/find', [MahasiswaController::class, 'find']);
Route::get('/latest', [MahasiswaController::class, 'latest']);
Route::get('/limit', [MahasiswaController::class, 'limit']);
Route::get('/skip-take', [MahasiswaController::class, 'skipTake']);
Route::get('/soft-delete', [MahasiswaController::class, 'softDelete']);
Route::get('/with-trashed', [MahasiswaController::class, 'withTrashed']);
Route::get('/restore', [MahasiswaController::class, 'restore']);
Route::get('/force-delete', [MahasiswaController::class, 'forceDelete']);

/*
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
/*
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
    $total_nilai=[80,40,50,90,45];
    return view('akademik.perulangan', compact ('nama', 'nim', 'total_nilai'));
});

Route::get('/mahasiswa', function (){
    $arrMhs=['Bill Gates','Linus Benedict Torval','Taylor Otwell', 'Elon Musk','Muhammad Yazid'];
    return view('akademik.mahasiswa',['mhs'=>$arrMhs]);
});
Route::get('/dosen', function (){
    $arrDosen=['Ronal Hadi','Deny S','Fazrol R','Deddy P','Ervan A','Cipto P'];
    return view('akademik.dosen',['mhs'=>$arrDosen]);
});

Route::get('/pnp/{jurusan}/{prodi}', function($jurusan,$prodi){
    $data=[$jurusan,$prodi];
    return view('akademik.prodi')->with('data',$data);
}) ->name('prodi');


*/