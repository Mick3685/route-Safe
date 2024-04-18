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
        Schema::create('facture', function (Blueprint $table) {
            $table->id(); // Clé primaire automatique
            $table->unsignedBigInteger('id_payment'); // Clé étrangère vers la table `payments`
            $table->date('date_facture'); // Date de la facture
            $table->decimal('montant_total', 10, 2); // Montant total de la facture, avec précision
            $table->timestamps(); // Colonnes `created_at` et `updated_at`

            // Ajoutez une clé étrangère pour établir une relation avec la table `payments`
            $table->foreign('id_payment')
                  ->references('id')
                  ->on('payments')
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
        Schema::dropIfExists('facture');
    }
};
