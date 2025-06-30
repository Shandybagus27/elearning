<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gurus extends Model
{
    use HasFactory;
    protected $table = 'guru';
    
    protected $fillable = [
        'nip',
        'nama',
        'tempat_lahir',
        'tgl_lahir', 
        'gender',
        'phone_number',
        'email',
        'alamat',
        'pendidikan',
    ];
}
