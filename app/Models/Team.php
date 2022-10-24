<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $table = 'teams';

    protected $fillable = [
        'name',
        'licence',
        'image',
        'category'
    ];
}
