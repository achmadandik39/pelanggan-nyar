<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengembalian extends Model
{
    protected $table = 'pengembalian';
    protected $fillable = ['id_pengembalian','isi_pengembalian','status_pengembalian'];
}
