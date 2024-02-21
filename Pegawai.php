<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = "pegawai";
    protected $primaryKey = "id_peg";
    protected $fillable = ['id_peg', 'nip', 'nama', 'tgl_lahir', 'jenis_kelamin', 'jabatan', 'golongan_id'];

    public $timestamps = false;
}
