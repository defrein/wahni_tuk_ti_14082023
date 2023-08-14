<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    use HasFactory;

    protected $table = 'surat_keluar_wahni';
    protected $primaryKey = 'id_surat_keluar';
    protected $guarded = [];

    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class, 'id_penerbit');
    }
    public function pengesah()
    {
        return $this->belongsTo(Pengesah::class, 'id_pengesah');
    }
}
