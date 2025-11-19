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
        Schema::create('book_category', function (Blueprint $table) {
            // Kita tidak butuh kolom ID, kita gunakan primary key komposit
            
            // Foreign key ke tabel books
            $table->foreignId('book_id')
                  ->constrained()
                  ->onDelete('cascade'); 

            // Foreign key ke tabel categories
            $table->foreignId('category_id')
                  ->constrained()
                  ->onDelete('cascade'); 

            // Menjadikan kombinasi keduanya sebagai primary key (tidak boleh duplikat)
            $table->primary(['book_id', 'category_id']); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_category');
    }
};
