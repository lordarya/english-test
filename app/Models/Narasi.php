<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Narasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'soals_id',
        'narasi',
    ];

    public function soal()
    {
    }
}
