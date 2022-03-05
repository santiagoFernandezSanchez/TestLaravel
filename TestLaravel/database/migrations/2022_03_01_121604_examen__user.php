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
        Schema::create('examen_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('examen_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('preguntas_acertadas')->nullable();
            $table->dateTime('fecha_validacion');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('examen_id')->references('id')->on('examens')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examen_user');
    }
};
