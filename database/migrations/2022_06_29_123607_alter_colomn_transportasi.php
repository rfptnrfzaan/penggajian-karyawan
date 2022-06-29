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
        Schema::table("karyawan", function (Blueprint $table) {
            $table->renameColumn("tunjangan_trasportasi", 'tunjangan_transportasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("karyawan", function (Blueprint $table) {
            $table->renameColumn("tunjangan_transportasi", 'tunjangan_trasportasi');
        });
    }
};