<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class keluhanpelanggan extends Model
{
    protected $table = 'keluhanpelanggan';
    protected $fillable = ['tipe_keluhan','isi_keluhan'];
}
