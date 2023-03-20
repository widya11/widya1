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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_bmn');
            $table->string('name');
            $table->foreignId('users_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('categories_id')->constrained('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('rooms_id')->constrained('rooms')->onDelete('cascade')->onUpdate('cascade');
            $table->text('description');
            $table->integer('stock')->default(0);
            $table->string('location');
            $table->string('slug');
            $table->string('condition');
            
            $table->timestamps();
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
