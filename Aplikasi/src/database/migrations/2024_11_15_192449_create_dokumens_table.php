<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokumensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Memastikan tabel dokumens tidak ada sebelum dibuat
        if (!Schema::hasTable('dokumens')) {
            Schema::create('dokumens', function (Blueprint $table) {
                // Menambahkan kolom-kolom yang diperlukan
                $table->id(); // ID otomatis
                $table->unsignedBigInteger('pendaftaran_id'); // ID pendaftaran
                $table->enum('jenis_dokumen', ['nilai_akademik', 'prestasi_non_akademik']); // Jenis dokumen
                $table->string('url_dokumen'); // Lokasi dokumen
                $table->timestamps(); // Kolom created_at dan updated_at
                
                // Menambahkan foreign key untuk relasi ke tabel pendaftaran
                $table->foreign('pendaftaran_id')->references('id')->on('pendaftarans')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Menurunkan tabel dokumens jika ada
        if (Schema::hasTable('dokumens')) {
            Schema::dropIfExists('dokumens');
        }
    }
}
