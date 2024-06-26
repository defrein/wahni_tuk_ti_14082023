<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    use HasFactory;

    protected $table = 'penerbit_wahni';
    protected $primaryKey = 'id_penerbit';
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
