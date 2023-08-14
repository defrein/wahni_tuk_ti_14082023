<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengesah extends Model
{
    use HasFactory;

    protected $table = 'pengesah_wahni';
    protected $primaryKey = 'id_pengesah';
    protected $guarded = [];

    public function suratMasuk()
    {
        return $this->hasMany(SuratMasuk::class, 'id_surat_masuk');
    }
    public function suratKeluar()
    {
        return $this->hasMany(SuratKeluar::class, 'id_surat_keluar');
    }
}
