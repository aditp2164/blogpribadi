<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mydescription extends Model
{
    use HasFactory;

    protected $table = 'mydescriptions';

    protected $fillable = [
        'deskripsi',
    ];
}
