<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelecehan extends Model
{
    use HasFactory;

    protected $table = 'pelecehan';
    protected $fillable = [
        'nama',
        'email',
        'judul',
        'nomor',
        'peristiwa',
    ];

}
