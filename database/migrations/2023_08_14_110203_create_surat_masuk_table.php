<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_masuk_wahni', function (Blueprint $table) {
            $table->increments('id_surat_masuk');
            $table->char('no_surat', 50);
            $table->string('nama_pengirim');
            $table->date('waktu');
            $table->string('lampiran');
            $table->string('perihal');
            $table->string('nama_penerima');
            $table->text('isi_surat');
            $table->tinyInteger('id_penerbit');
            $table->string('tempat');
            $table->tinyInteger('id_pengesah');
            $table->string('tembusan');
            $table->string('file-scan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_masuk_wahni');
    }
}
