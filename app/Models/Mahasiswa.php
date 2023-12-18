<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    public $table = "mahasiswa";
    protected $primaryKey = "nim";
    public $incrementing=false;
    protected $keyType="string";
    protected $filiable = ['nim', 'nama', 'gambar','email', 'alamat', 'umur', 'created_at'];
}
