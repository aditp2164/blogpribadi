<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyProjek extends Model
{
    use HasFactory;

    protected $table = 'my_projeks';

    protected $fillable = [
        'judul_projek',
        'deskripsi',
        'gambar',
    ];
}

