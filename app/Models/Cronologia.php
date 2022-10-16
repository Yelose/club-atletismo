<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cronologia extends Model
{
    use HasFactory;

    protected $table = 'cronologias';

    protected $fillable = [
        'fecha',
        'resumen',
    ];

    public $timestamps = true;
}
