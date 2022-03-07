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
        Schema::create('examens', function (Blueprint $table) {
            $table->id();
            // $table->enum('nivel', ['basico', 'intermedio','avanzado']);
            $table->string('niveles')->nullable();
            $table->integer('numero_preguntas')->nullable();
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_final');
            $table->dateTime('fecha_validacion')->nullable();
            $table->unsignedBigInteger('tema_id');
            $table->timestamps();


            $table->foreign('tema_id')->references('id')->on('temas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examens');
    }
};
