<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courseclass extends Model
{
    use HasFactory;

    protected $fillable = [
        'classid',
        'courseid',
        'lectid',
        'day'
    ];
}
