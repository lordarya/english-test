<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanPesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_pesertas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jawabans_id')->constrained('jawabans')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->string('jawaban')->nullable();
            $table->integer('is_checked');
            $table->integer('is_true');
            $table->foreignId('soals_id')->constrained('soals')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('users_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
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
