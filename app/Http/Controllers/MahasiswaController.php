<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index (){
        return "ini adalah method index di mahasiswa controller";
    }
    public function insertSql()
    {
        $query=DB::insert("insert into students(nim,nama_lengkap,tempat_lahir,tgl_lahir,email,prodi,alamat,created_at,updated_at) 
        values ('1234567890','Rizky','Bandung','2000-01-01','rizky@example.com','Teknik Informatika','Jl. Merdeka No. 1',NOW(),NOW())");
    }
    public function insertPrepared()
    {
        $query=DB::insert("insert into students(nim,nama_lengkap,tempat_lahir,tgl_lahir,email,prodi,alamat,created_at,updated_at) 
        values (?,?,?,?,?,?,?,?,?)",['1234567890','Wang Lin','Heinan','2000-01-01','Wanglin@example.com','Guntur Surgawi','Jl. Dewa. 1',NOW(),NOW()]);
    }
}
