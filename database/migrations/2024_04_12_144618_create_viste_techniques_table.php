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
        Schema::create('viste_techniques', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(automobile::class)->constrained();
            $table->string('agence_de_visite');
            $table->date('date_viste');
            $table->date('date_expiration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viste_techniques');
    }
};
