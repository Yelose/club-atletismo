<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quien extends Model
{
    use HasFactory;

    protected $table = 'quiens';

    protected $fillable = [
        'titulo' .
        'image',
        'resumen',
    ];

    public $timestamps = true;
}