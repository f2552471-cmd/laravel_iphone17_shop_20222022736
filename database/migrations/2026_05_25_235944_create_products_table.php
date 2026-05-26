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
          // Just keep this single line for the relationship:
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            
            $table->string('name'); // Product name (e.g., iPhone 15 Pro)
            $table->string('slug')->unique(); // URL-friendly slug
            $table->text('description')->nullable(); // Product description
            $table->decimal('price', 10, 2); // Product price
            $table->integer('quantity')->default(0); // Stock quantity
            $table->string('image')->nullable(); // Image file path
            $table->boolean('is_active')->default(true); // Product status (active/hidden)
            
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
