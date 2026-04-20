<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class dosen extends Model
{
    protected $table = 'dosens';
    protected $fillable = ['nik','nama','email','no_telp','prodi','alamat'];

    use HasFactory;
    
    protected $guarded = [];
    use SoftDeletes;
}
