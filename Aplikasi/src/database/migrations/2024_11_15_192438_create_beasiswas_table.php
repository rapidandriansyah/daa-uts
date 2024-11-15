<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Memastikan tabel beasiswas tidak ada sebelum dibuat
        if (!Schema::hasTable('beasiswas')) {
            Schema::create('beasiswas', function (Blueprint $table) {
                // Menambahkan kolom-kolom yang diperlukan
                $table->id(); // ID otomatis
                $table->string('nama'); // Nama beasiswa
                $table->text('kriteria'); // Kriteria penerimaan beasiswa
                $table->integer('kuota'); // Jumlah kuota beasiswa
                $table->decimal('nilai', 10, 2); // Nilai beasiswa
                $table->timestamps(); // Kolom created_at dan updated_at
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
        // Menurunkan tabel beasiswas jika ada
        if (Schema::hasTable('beasiswas')) {
            Schema::dropIfExists('beasiswas');
        }
    }
}
