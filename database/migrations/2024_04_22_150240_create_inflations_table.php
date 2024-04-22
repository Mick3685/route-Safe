<?php

use App\Models\Automobile;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up(): void
    {
        Schema::create('inflations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Automobile::class)->constrained();
            $table->string('type');
            $table->text('description');
            $table->date('date_inflation');
            $table->string('lieu');
            $table->time('heure');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inflations');
    }
};
