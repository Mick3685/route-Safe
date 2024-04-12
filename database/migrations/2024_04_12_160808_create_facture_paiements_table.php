<?php

use App\Models\Paiements;
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
        Schema::create('facture_paiements', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Paiements::class)->constrained();
            $table->integer('montant_total');
            $table->date('date_creation_paiement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facture_paiements');
    }
};
