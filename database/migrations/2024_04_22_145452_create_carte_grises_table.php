<?php

use App\Models\Automobile;
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
        Schema::create('carte_grises', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Automobile::class)->constrained();
            $table->string('imagecg')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carte_grises');
    }
};
