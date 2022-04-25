<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perundungan extends Model
{
    use HasFactory;
    protected $table = 'perundungan';
    protected $fillable = [
        'nama',
        'email',
        'judul',
        'nomor',
        'peristiwa',
    ];
}
