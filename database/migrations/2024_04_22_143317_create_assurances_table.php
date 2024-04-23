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
        Schema::create('assurances', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Automobile::class)->constrained();
            $table->integer('numpolice');
            $table->string('nom');
            $table->date('date_paiementass');
            $table->date('date_expirationass');
            $table->string('fileass')->nullable();
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
