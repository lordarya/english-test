<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'nim',
        'level',
        'test_date',
        'is_attempt'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
