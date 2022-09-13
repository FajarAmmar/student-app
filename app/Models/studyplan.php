<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studyplan extends Model
{
    use HasFactory;

    protected $fillable = [
        'planid',
        'classid',
        'studentid'
    ];
    public $timestamps = false;
}
