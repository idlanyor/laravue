<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rombel extends Model
{
    protected $table='rombel';

    public function jurusan()
    {
        return $this->belongsTo('App\models\Jurusan','id_jurusan','id');
    }

    public function kelas()
    {
        return $this->belongsTo('App\models\Kelas','id_kelas','id');
    }
}
