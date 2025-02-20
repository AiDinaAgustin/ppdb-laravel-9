<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasilspk extends Model
{
    use HasFactory;
    protected $table = 'pendaftarans';
    protected $guarded = ['id'];

    public function siswacalon()
    {
        return $this->belongsTo(SiswaCalon::class, 'id');
    }
}
