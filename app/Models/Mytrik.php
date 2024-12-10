<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mytrik extends Model
{
    use HasFactory;

    protected $table = 'mytriks';

    protected $fillable = [
        'deskripsi',
    ];
}
