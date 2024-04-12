<?php

use App\Models\automobile;
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
            $table->foreignIdFor(automobile::class)->constrained();
            $table->integer('num_carte_grise');
            $table->date('date_emission');
            $table->date('date_expiration');
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
