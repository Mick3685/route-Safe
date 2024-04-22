<?php

use App\Models\Inflation;
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
            $table->foreignIdFor(Inflation::class)->constrained();
            $table->decimal('montant', 10, 2); 
            $table->date('delaidepaiement');
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
