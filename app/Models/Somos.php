<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Somos extends Model
{
    use HasFactory;

    public $timestamps = true;
    
    protected $table = 'somos';
    
    protected $fillable = [
        'titulo',
        'imagen',
        'resumen',
    ];
}
