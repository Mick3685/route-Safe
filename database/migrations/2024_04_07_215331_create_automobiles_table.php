<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutomobilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automobiles', function (Blueprint $table) {
            $table->id();
            $table->string('Numimma')->unique();
            $table->date('Dateimma');
            $table->string('Marque');
            $table->string('Modele');
            $table->string('Anneefab');
            $table->string('Numseriemoteur');
            $table->string('Genreauto');
            $table->string('Type');
            $table->string('couleur');
            $table->string('numimmaprecedent')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('automobiles');
    }
};
