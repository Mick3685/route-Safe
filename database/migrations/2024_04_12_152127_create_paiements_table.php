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
        Schema::create('payments', function (Blueprint $table) {
            $table->id(); // Clé primaire automatique
            $table->unsignedBigInteger('id_User'); // Clé étrangère vers la table `users`
            $table->decimal('montant_paye', 10, 2); // Montant payé, avec précision
            $table->date('date_payment'); // Date de paiement
            $table->string('moyen_de_paiement'); // Moyen de paiement (carte, espèces, etc.)
            $table->timestamps(); // Colonnes `created_at` et `updated_at`

            // Ajoutez une clé étrangère pour établir une relation avec la table `users`
            $table->foreign('id_User')
                  ->references('id')
                  ->on('users')
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
        Schema::dropIfExists('payments');
    }
};
