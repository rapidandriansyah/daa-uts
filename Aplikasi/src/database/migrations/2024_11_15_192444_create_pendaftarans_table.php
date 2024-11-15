<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('beasiswa_id')->constrained('beasiswas')->onDelete('cascade');
            $table->string('nama_pendaftar');
            $table->decimal('nilai_akademik', 10, 2);
            $table->text('prestasi_non_akademik');
            $table->timestamp('tanggal_pendaftaran')->useCurrent();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pendaftarans');
    }
}
