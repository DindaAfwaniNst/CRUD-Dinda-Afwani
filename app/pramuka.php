<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pramuka extends Model
{
    protected $table='pramuka';
    protected $fillable=['nik','nama','alamat','matakuliah','sks','handphone'];
}
