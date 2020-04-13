<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Minuman extends Model
{
    //
    protected $table='minuman';
    protected $primaryKey='id_minuman';
    protected $fillable=['nama_minuman','jenis','harga'];
}
