<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lycee extends Model
{
    protected $fillable = [
        'name',
        'headcount',
        'lat',
        'long',
    ];
}
