<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computadora extends Model
{
    use HasFactory;

    protected $fillable = [
        'model', 'inch', 'brand', 'operativeSystem', 'version', 'capacity', 'memory', 'processor', 'core'
    ];
}
