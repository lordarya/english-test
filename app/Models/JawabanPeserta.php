<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanPeserta extends Model
{
    use HasFactory;
    protected $fillable = [

        'is_checked',
        'is_true',
    ];

    public function soal()
    {
        return $this->belongsTo(Soal::class, 'soals_id');
    }
}
