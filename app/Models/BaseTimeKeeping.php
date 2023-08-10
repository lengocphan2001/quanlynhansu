<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseTimeKeeping extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'identity'
    ];
}
