<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    public function insertDosen()
    {
        $query = DB::table('dosens')->insert(
            [
                'nik' => '123456789012345678',
                'nama' => 'Alex Johnson',
                'email' => 'alex.johnson@gmail.com',
                'no_telp' => '081234567890',
                'prodi' => 'Teknik Informatika',
                'alamat' => 'Jl. Rasuna Said No. 1',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dd($query);
    }
    public function insertBanyakDosen()
    {
        $query = DB::table('dosens')->insert([
            [
                'nik' => '123456789012345679',
                'nama' => 'Emily Davis',
                'email' => 'emily.davis@gmail.com',
                'no_telp' => '081234567891',
                'prodi' => 'TRPL',
                'alamat' => 'Jl. Sudirman No. 456',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nik' => '123456789012345680',
                'nama' => 'Michael Wilson',
                'email' => 'michael.wilson@gmail.com',
                'no_telp' => '081234567892',
                'prodi' => 'Teknik Informatika',
                'alamat' => 'Jl. Thamrin No. 789',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
        dd($query);
        }    

    public function updateDosen()
    {
        $query = DB::table('dosens')
            ->where('nama', 'Alex Johnson')
            ->update
            (
                [
                    'no_telp' => '081234567899',
                    'prodi' => 'Teknik Komputer',
                    'updated_at' => now(),
                ]
            );
        dd($query);
    }

    public function updateWhereDosen()
    {
        $query = DB::table('dosens')
            ->where('nama', 'Emily Davis')
            ->where('prodi','<>','TRPL')
            ->update
            (
                [
                    'email' => 'emily_davis@gmail.com',
                    'updated_at' => now(),
                ]
            );
        dd($query);
    }
    public function updateOrInsert()
    {
        $query = DB::table('dosens')
            ->updateOrInsert(
                [
                    'nik' => '123456789012345681',
                ],
                [
                    'nama' => 'David Lee',
                    'email' => 'david.lee@gmail.com',
                    'no_telp' => '081234567893',
                    'prodi' => 'Teknik Informatika',
                    'alamat' => 'Jl. Gatot Subroto No. 123',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        dd($query);
    }

    public function deleteDosen()
    {
        $query = DB::table('dosens')
            ->where('nama', 'Michael Wilson')
            ->delete();
        dd($query);
    }

    public function get()
    {
        $query = DB::table('dosens')->get();
        dd($query);
    }

    public function getView()
    {
        $query = DB::table('dosens')->get();
        
        echo $query[0]->id . "<br />";
        echo $query[0]->nik . "<br />";
        echo $query[0]->nama . "<br />";
        echo $query[0]->email . "<br />";
        echo $query[0]->alamat . "<br />";
    }
    public function getViewR()
    {
        $query = DB::table('dosens')->get();
        return view('akademik.dosen',[ 'dosens' => $query ]);
    }

    public function getwhere()
    {
        $query = DB::table('dosens')
            ->where('prodi', 'Teknik Informatika')
            ->orderBy('nama', 'asc')
            ->get();
        return view('akademik.dosen',[ 'dosens' => $query ]);
    }

    public function selectDosen()
    {
        $query = DB::table('dosens')
            ->select('nik', 'nama as nama_dosen')
            ->get();
        dd($query);
    }
    public function take()
    {
        $query = DB::table('dosens')
            ->orderBy('nama', 'asc')
            ->skip(1)
            ->take(2)
            ->get();
        return view('akademik.dosen',[ 'dosens' => $query ]);
    }

    public function first()
    {
        $query = DB::table('dosens')
            ->where('nama', 'Alex Johnson') ->first();
          return view('akademik.dosen',[ 'dosens' => [$query ]]);
    }

    public function find()
    {
        $query = DB::table('dosens')
            ->find(2);
        return view('akademik.dosen',[ 'dosens' => [$query ]]);
    }

    public function raw()
    {
        $query = DB::table('dosens')
            ->selectRaw('count(*) as total_dosen')
            ->get();
        
        echo $query[0]->total_dosen;    
    }
}