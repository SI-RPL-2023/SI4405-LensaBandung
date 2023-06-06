<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileKota extends Model
{
    use HasFactory;
    protected $table = 'profilekota';
    protected $fillable = ['deskripsi'];
}
