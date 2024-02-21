<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    protected $table = "golongan";
    public $timestamp = false;
    public function pegawai(){
    return $this->hasMany(Pegawai::class, 'golongan_id');

   }
    }

