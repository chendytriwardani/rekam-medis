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
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('nama',255);
            $table->string('no_bpjs', 20);
            $table->string('jenis_kelamin', 10);
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir', 50);
            $table->string('alamat', 255);
            $table->string('no hp',13);
            $table->string('bb',3);
            $table->string('tb',3);

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
        Schema::dropIfExists('pasien');
    }
};
