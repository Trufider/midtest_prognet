<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $table = 'obat';
    protected $fillable = ['nama_obat','jenis_obat','stok','expired','harga'];
}
