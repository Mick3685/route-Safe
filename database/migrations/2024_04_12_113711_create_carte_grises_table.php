<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Exécute les migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carte_grises', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_automobile');
            $table->string('num_carte')->unique(); // Assurez-vous que le numéro de carte est unique
            $table->date('date_emission');
            $table->date('date_expiration');
            $table->timestamps();

            // Ajoutez la relation de clé étrangère si nécessaire
            $table->foreign('id_automobile')
                  ->references('id')
                  ->on('automobiles')
                  ->onDelete('cascade');
        });
    }

    /**
     * Inverse les migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carte_grises');
    }
};
