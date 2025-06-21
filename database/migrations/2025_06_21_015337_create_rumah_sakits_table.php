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
        Schema::create('rumah_sakits', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->text('alamat');
            $table->string('telpon', 20)->nullable();
            $table->enum('tipe', ['Tipe A', 'Tipe B', 'Tipe C', 'Tipe D', 'Rumah Sakit Jiwa', 'Rumah Sakit Mata', 'Rumah Sakit Kanker', 'Rumah Sakit Ibu dan Anak']);
            $table->double('latitude');
            $table->double('longitude');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rumah_sakits');
    }
};
