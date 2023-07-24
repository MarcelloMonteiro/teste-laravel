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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->comment("Nome do produto");
            $table->longText('detail')->nullable()->comment("Detalhe dos Produtos");
            $table->string('price')->nullable()->comment("Valor do Produto");
            $table->string('stock')->nullable()->comment("Quantidade produtos em estoque");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
