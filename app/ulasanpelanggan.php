<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ulasanpelanggan extends Model
{
    protected $table = 'ulasanpelanggan';
    protected $fillable = ['rating','isi_ulasan'];
}
