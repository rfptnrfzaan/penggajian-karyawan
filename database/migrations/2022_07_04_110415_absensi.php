<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi', function (Blueprint $table) {
            $table->id();
            
            $table->string('masuk');
            $table->text('lembur');
            $table->integer('gaji_lembur');
            $table->integer('spj');
            $table->timestamps();

            $table->foreignId('id_karyawan');
            $table->foreign('id_karyawan')->references('id')->on('karyawan')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absensi');
    }
};
