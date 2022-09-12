<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $fillable = [
        'studentid',
        'name',
        'semester',
        'majorid',
        'userid',
        'birth',
        'address',
    ];

    public function major()
    {
        return $this->hasMany(major::class);
    }
}
