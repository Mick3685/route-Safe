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
        Schema::create('droits_de_douanes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(automobile::class)->constrained();
            $table->string('agence_de_paiement');
            $table->date('date_paiement');
            $table->date('date_expiration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('droits_de_douanes');
    }
};