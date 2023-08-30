<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Penjualan extends Eloquent
{
    use HasFactory;
    
    protected $fillable = ['id_kendaraan', 'tanggal_penjualan','harga_penjualan'];
}
