<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaCalon extends Model
{
    use HasFactory;
    // protected $guarded = ['id'];
    protected $fillable = [
        'name', 'nisn', 'no_telp', 'agama', 'tanggal_lahir',
        'tempat_lahir', 'asal_sekolah', 'jarak', 'jurusan',
        'jk', 'nilai_indo', 'nilai_ipa', 'nilai_mtk', 'nilai_ing',
        'alamat', 'email'
    ];

    
    public function hasil()
    {
        return $this->hasOne(Hasilspk::class);
    }
}
