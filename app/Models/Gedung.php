<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gedung extends Model
{
    protected $table = 'gedung';
    /** @use HasFactory<\Database\Factories\GedungFactory> */
    protected $fillable = [
        'Gedung'
    ];
    use HasFactory;
}
