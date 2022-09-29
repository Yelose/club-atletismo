<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quien extends Model
{
    use HasFactory;


public $timestamps = true;

protected $table = 'Quien';

protected $fillable = [
    'titulo'.
    'image',
    'resumen',
];
}