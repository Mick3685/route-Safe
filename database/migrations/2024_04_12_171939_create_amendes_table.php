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
        Schema::create('amend', function (Blueprint $table) {
            $table->id('id_amend'); // Utilise 'id_amend_infra' comme clé primaire
            $table->unsignedBigInteger('id_infraction'); // Clé étrangère vers la table `infractions`
            $table->date('delai_de_paiement'); // Délai de paiement
            $table->timestamps(); // Colonnes `created_at` et `updated_at`

            // Ajoutez une clé étrangère pour établir une relation avec la table `infractions`
            $table->foreign('id_infraction')
                  ->references('id')
                  ->on('infractions')
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
        Schema::dropIfExists('amend');
    }
};
