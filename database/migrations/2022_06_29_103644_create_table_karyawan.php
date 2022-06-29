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
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 17);
            $table->string('nama');
            $table->string('npwp');
            $table->text('alamat');
            $table->string('jenis_kelamin');
            $table->string('jabatan');
            $table->integer('gaji_pokok');
            $table->integer('tunjangan_makanan');
            $table->integer('tunjangan_trasportasi');
            $table->string('status_pernikahan');
            $table->integer('tanggungan');
            $table->integer('tunjangan_lainnya');
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
        Schema::dropIfExists('karyawan');
    }
};
