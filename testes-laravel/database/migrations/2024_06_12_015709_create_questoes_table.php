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
        Schema::create('questoes', function (Blueprint $table) {
            $table->id();
            $table->text('enunciado');
            $table->string('resposta_a');
            $table->string('resposta_b');
            $table->string('resposta_c');
            $table->string('resposta_d');
            $table->string('resposta_e');
            $table->string('resposta_correta');
            $table->integer('valor_total');
            $table->foreignId('teste_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questoes');
    }
};
