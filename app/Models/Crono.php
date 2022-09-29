<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crono extends Model
{
    use HasFactory;

    public $timestamps = true;
    
    protected $table = 'crono';

    protected $fillable = [
        'fecha',
        'resumen',
    ];
}
