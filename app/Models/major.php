<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\student;

class major extends Model
{
    use HasFactory;

    protected $fillable = [
        'majorid',
        'name',
        'facultid'
    ];

    public function student()
    {
        return $this->belongsTo(student::class);
    }
    
}
