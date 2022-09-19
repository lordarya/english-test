<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JawabanPesertas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_pesertas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jawaban');
            $table->integer('is_checked');
            $table->integer('is_true');
            $table->integer('id_soal'); 
            $table->integer('id_user');
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
        Schema::dropIfExists('jawaban_pesertas');
    }
}
