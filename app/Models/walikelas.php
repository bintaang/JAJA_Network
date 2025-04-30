<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class walikelas extends Model
{
    protected $table = 'walikelas';

    protected $fillable = [
        'id',
        'WaliKelas',
    ];
    use HasFactory;
}
