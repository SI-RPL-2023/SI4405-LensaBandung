<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class walikota extends Model
{
    use HasFactory;
    protected $table = 'walikota';
    protected $fillable = [
        'nama_lengkap',
        'jabatan',
        'kebangsaan',
        'lahir',
        'awal_menjabat',
        'akhir_menjabat',
        'foto',
        'tentang'
    ];
}
