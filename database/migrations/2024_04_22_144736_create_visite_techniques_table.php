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
        Schema::create('visite_techniques', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Automobile::class)->constrained();
            $table->date('date_visite');
            $table->date('date_retour');
            $table->string('agence');
            $table->string('filevt');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visite_techniques');
    }
};
