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
        Schema::create('infraction_routieres', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(automobile::class)->constrained();
            $table->integer('montant_amende');
            $table->date('date_infraction');
            $table->date('heure_infraction');
            $table->date('lieu_infraction');
            $table->string('description_infraction');
            $table->string('type_infraction');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infraction_routieres');
    }
};
