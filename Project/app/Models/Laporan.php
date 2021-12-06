<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'Judul', 
        'Isi-Laporan', 
        'Lokasi-Kejadian', 
        'Instansi-Tujuan', 
        'Kategori-Laporan', 
        'Tanggal Kejadian'
    ];
}
