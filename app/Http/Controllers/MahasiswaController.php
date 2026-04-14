<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /* public function index (){
        return "ini adalah method index di mahasiswa controller";
    }
    public function insertSql()
    {
        $query=DB::insert("insert into students(nim,nama_lengkap,tempat_lahir,tgl_lahir,email,prodi,alamat,created_at,updated_at) 
        values ('249007','Aziz','Talang Babungo','2006-06-06','aziz@example.com','Teknik Informatika','Jl. Cubadak Gadang',NOW(),NOW())");
    }
    public function insertPrepared()
    {
        $query=DB::insert("insert into students(nim,nama_lengkap,tempat_lahir,tgl_lahir,email,prodi,alamat,created_at,updated_at) 
        values (?,?,?,?,?,?,?,?,?)",['1234567890','Wang Lin','Heinan','2000-01-01','Wanglin@example.com','Guntur Surgawi','Jl. Dewa. 1',NOW(),NOW()]);
    }
        public function insertBinding()
    {
        $query=DB::insert("insert into students(nim,nama_lengkap,tempat_lahir,tgl_lahir,email,prodi,alamat,created_at,updated_at) 
        values (:nim,:nama_lengkap,:tempat_lahir,:tgl_lahir,:email,:prodi,:alamat,:created_at,:updated_at)",
        [
            'nim' => '2401091007',
            'nama_lengkap' => 'B Xun',
            'tempat_lahir' => 'Beijing',
            'tgl_lahir' => '2000-01-01',
            'email' => 'bxun@gmail.com',
            'prodi' => 'Teknik Pernapasan Api',
            'alamat' => 'Jl. Merdeka No. 1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
    public function update()
    {
        $query=DB::update("update students set tempat_lahir='Washington' where nama_lengkap=?", ['B Xun']);
    }

    public function delete()
    {
        $query=DB::delete("delete from students where nama_lengkap=?", ['B Xun']);
    }

    public function select()
    {
        $query=DB::select("select * from students");
        dd($query);
    }

    public function selectTampil()
    {
        $query=DB::select("select * from students");
        echo ($query[0]->id) . "<br />";
        echo ($query[0]->nim) . "<br />";
        echo ($query[0]->nama_lengkap) . "<br />";
        echo ($query[0]->email) . "<br />";
        echo ($query[0]->alamat) . "<br />";
        
    }

    public function selectView()
    {
        $query=DB::select("select * from students");
        return view('akademik.mahasiswa', ['students' => $query]);
    }

    public function selectwhere()
    {
        $query=DB::select("select * from students where prodi=? order by nim ASC", ['Teknik Informatika']);
        return view('akademik.mahasiswa', ['students' => $query]);
    }

    public function statement()
    {
        $query=DB::statement("truncate students");
        return ("tabel mahasiswa sudah kosong");
    }

    */
    public function cekObjek ()
    {
        $mahasiswa=new Mahasiswa();
        dd($mahasiswa);
     }

    public function insert()
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = '2401091007';
        $mahasiswa->nama_lengkap = 'B Xun';
        $mahasiswa->tempat_lahir = 'Beijing';
        $mahasiswa->tgl_lahir = '2000-01-01';
        $mahasiswa->email = 'bxun@gmail.com';
        $mahasiswa->prodi = 'TRPL';
        $mahasiswa->alamat = 'Jl. Merdeka No. 1';
        $mahasiswa->save();

        dd($mahasiswa);
    }

    public function massAssignment()
    {
        $mahasiswa=Mahasiswa::create(
            [
                'nim' => '2401091008',
                'nama_lengkap' => 'C Yao',
                'tempat_lahir' => 'Shanghai',
                'tgl_lahir' => '2000-01-01',
                'email' => 'cyao@gmail.com',
                'prodi' => 'Teknik Komputer',
                'alamat' => 'Jl. Merdeka No. 2',
            ]
        );
        dump($mahasiswa);
        $mahasiswa=Mahasiswa::create(
            [
                'nim' => '2401091009',
                'nama_lengkap' => 'D Lee',
                'tempat_lahir' => 'Shenzhen',
                'tgl_lahir' => '2000-01-01',
                'email' => 'dlee@gmail.com',    
                'prodi' => 'Manajemen Informatika',
                'alamat' => 'Jl. Merdeka No. 3',
            ]
        );
        dump($mahasiswa);
}

public function update()
{
    $mahasiswa=Mahasiswa::find(6);
    $mahasiswa->tempat_lahir='bandung';
    $mahasiswa->prodi='Teknik Informatika';
    $mahasiswa->save();
    dd($mahasiswa);
}

public function updateWhere()
{
    $mahasiswa=Mahasiswa::where('nim','2401091008')->first();
    $mahasiswa->tempat_lahir='bandung';
    $mahasiswa->save();
    dd($mahasiswa);
}

public function massUpdate()
{
    $mahasiswa=Mahasiswa::where('nim','2401091009')->first()->update(
        [
        'tempat_lahir' => 'payakumbuh',
        'prodi' => 'Teknik Informatika'
    ]);
    dd($mahasiswa);
}

public function delete()
{
    $mahasiswa=Mahasiswa::find(17);
    $mahasiswa->delete();
    dd($mahasiswa); 
}

public function destroy()
{
    $mahasiswa=Mahasiswa::destroy(16);
    dd($mahasiswa);     
}

public function massDelete()
{
    $mahasiswa=Mahasiswa::where('prodi','Manajemen Informatika')->delete();
    dd($mahasiswa);     
}

/*public function all()
{
    $mahasiswa=Mahasiswa::all();
    dd($mahasiswa);     
}
*/
public function all()
{
    $mahasiswa=Mahasiswa::all();
    foreach ($mahasiswa as $mhs) {
    echo $mahasiswa[0]->nim . "<br />";
    echo $mahasiswa[0]->nama_lengkap . "<br />";
    echo $mahasiswa[0]->tempat_lahir . "<br />";
    echo $mahasiswa[0]->alamat . "<br />";
    echo '<hr>';
    }
}

public function allview()
{
    $mahasiswa=Mahasiswa::all();
    return view('akademik.mahasiswa', ['students' => $mahasiswa]);
}

}