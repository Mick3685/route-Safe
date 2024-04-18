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
        Schema::create('t_v_ms', function (Blueprint $table) {
            $table->id(); // Crée une clé primaire automatique
            $table->unsignedBigInteger('id_automobile'); // Clé étrangère vers la table `automobiles`
            $table->date('date_paiement'); // Date de paiement
            $table->date('date_expiration'); // Date d'expiration
            $table->string('lieu_paiement'); // Lieu de paiement
            $table->timestamps(); // Crée les colonnes `created_at` et `updated_at`

            // Définir la clé étrangère vers la table `automobiles`
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
        Schema::dropIfExists('t_v_ms');
    }
};
