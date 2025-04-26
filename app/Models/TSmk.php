<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TSmk extends Model
{
    /** @use HasFactory<\Database\Factories\TSmkFactory> */
    protected $fillable = [
        'id',
        'NISN',
        'NamaSiswa',
        'Jurusan',
        'Gedung',
        'Kelas',
        'WaliKelas',
    ];
    use HasFactory;
}
