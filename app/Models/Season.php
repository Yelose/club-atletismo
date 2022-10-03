<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;
    public $timestamps = true;

    protected $table = 'seasons';

    protected $fillable = [
        'name'
    ];

    public function achievements()
    {
        return $this->hasMany(Achievement::class);
    }
}
