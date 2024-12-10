<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutMe extends Model
{
    use HasFactory;

    protected $table = 'aboutme';

    protected $fillable = [
        'nama',
        'ttl',
        'email',
        'no_telpon',
        'alamat',
        'pendidikan',
        'minat',
        'hobi',
    ];
}

