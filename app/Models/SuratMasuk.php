<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratMasuk extends Model
{
    use HasFactory;

    protected $table = 'surat_masuk_wahni';
    protected $primaryKey = 'id_surat_masuk';
    protected $guarded = [];

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class, 'id_penerbit');
    }
    public function pengesah()
    {
        return $this->belongsTo(SuratKeluar::class, 'id_pengesah');
    }
}
