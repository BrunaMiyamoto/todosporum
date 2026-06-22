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
        Schema::create('aprenda_sobres', function (Blueprint $table) {
            $table->id();
            $table->timestamp("dt_publi");
            $table->string("autor", 100);
            $table->string("titulo");
            $table->mediumText("conteudo");
            $table->string("capa");
            $table->text("resumo");
            $table->string("videos");
            $table->string("tipo", 45);
            $table->timestamps();

            $table->foreignId("usuario_id")->constrained("usuarios");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aprenda_sobres');
    }
};
