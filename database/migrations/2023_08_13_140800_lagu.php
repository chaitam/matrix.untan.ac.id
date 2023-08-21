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
        Schema::create('table_lagu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('file_audio', 225);
            $table->string('judul', 225);
            $table->string('file_foto_lagu', 225);
            $table->text('lirik');
            $table->string('pencipta', 225);
            $table->string('tahun');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_lagu');
    }
};
