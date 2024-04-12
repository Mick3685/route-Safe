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
        Schema::create('assurances', function (Blueprint $table) {
                $table->id();
                $table->foreignIdFor(automobile::class)->constrained();
                $table->string('compagnie_assurance');
                $table->integer('Num_police')->nullable();
                $table->string('date_effet')->nullable();
                $table->string('type_assurance')->nullable();
                $table->string('date_debut_assurance')->nullable();
                $table->string('date_fin_assurance')->nullable();
                $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assurances');
    }
};
