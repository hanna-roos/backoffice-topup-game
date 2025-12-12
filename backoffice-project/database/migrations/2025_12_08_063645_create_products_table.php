<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->string('nama');
        $table->string('image')->nullable();
        $table->id();
        $table->decimal('harga', 10, 2);
        $table->string('kategori')->nullable();
        $table->timestamps();
        $table->enum('status', ['active', 'inactive', 'draft', 'archived'])->default('active');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
