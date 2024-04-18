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
        Schema::create('assurances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_automobile');
            $table->string('nom_assurance');
            $table->decimal('prix_assurance', 10, 2); // Utilisez un type de données approprié pour le prix
            $table->string('compagnie_assurance');
            $table->string('num_police');
            $table->date('date_debut');
            $table->date('date_fin');
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
        Schema::dropIfExists('assurances');
    }
};
