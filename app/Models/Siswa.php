<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $fillable = [
        'nis',
        'nama',
        'gender',
        'tempat_lahir',
        'tgl_lahir',
        'nama_ortu',
        'email',
        'alamat',
        'phone_number',
        'kelas_id', 
    ];

    // public function kelas(): BelongsTo
    // {
    //     return $this->belongsTo(Kelas::class, 'kelas_id');
    // }
    // Relasi ke tabel kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
