<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        // Nama Pasien	Jenis Kelamin	Hemoglobin	MCH	MCHC	MCV	Kesimpulan
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pasien');
            $table->enum('jenis_kelamin', ['l', 'p']);
            $table->float('hb');
            $table->float('mch');
            $table->float('mchc');
            $table->float('mcv');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
