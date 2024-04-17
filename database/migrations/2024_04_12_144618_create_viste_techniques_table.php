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
        Schema::create('controle_technique', function (Blueprint $table) {
            $table->id('id_controle_technique'); // Utilise 'id_controle_technique' comme clé primaire
            $table->unsignedBigInteger('id_automobile'); // Clé étrangère vers la table `automobiles`
            $table->date('date_controle'); // Date du contrôle
            $table->date('date_prochain_controle'); // Date du prochain contrôle
            $table->string('lieu_controle'); // Lieu du contrôle
            $table->timestamps(); // Ajoute les colonnes `created_at` et `updated_at`

            // Ajoutez une clé étrangère pour établir une relation avec la table `automobiles`
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
        Schema::dropIfExists('controle_technique');
    }
};
