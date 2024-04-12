<?php

use App\Models\Infraction_routiere;
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
        Schema::create('amendes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(infraction_routiere::class)->constrained();
            $table->string('delai_paiement_amende');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amendes');
    }
};
