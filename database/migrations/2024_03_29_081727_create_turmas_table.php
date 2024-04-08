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
        Schema::create('turmas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('nivel');
            $table->unsignedBigInteger('id_curso');
            $table->unsignedBigInteger('id_letivo');
            $table->foreign('id_curso')->references('id')->on('cursos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_letivo')->references('id')->on('ano_letivos')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turmas');
    }
};
