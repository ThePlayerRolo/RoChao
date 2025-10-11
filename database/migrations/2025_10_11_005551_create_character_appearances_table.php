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
        Schema::create('character_appearances', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("Hat1");
            $table->integer("Hat2");
            $table->integer("Hat3");
            $table->integer("Head");
            $table->integer("Face");
            $table->integer("Pants");         
            $table->integer("Shirts");      
            $table->integer("TShirts");  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('character_appearances');
    }
};
