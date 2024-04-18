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
        Schema::create('infractions', function (Blueprint $table) {
            $table->id(); // Clé primaire automatique
            $table->unsignedBigInteger('user_automobile'); // Clé étrangère vers la table `automobiles` ou `users`
            $table->string('type'); // Type d'infraction
            $table->string('raison'); // Raison de l'infraction
            $table->date('date'); // Date de l'infraction
            $table->time('heure'); // Heure de l'infraction
            $table->string('lieu'); // Lieu de l'infraction
            $table->timestamps(); // Colonnes `created_at` et `updated_at`

            // Ajoutez une clé étrangère pour établir une relation avec la table `automobiles` ou `users`
            // Assurez-vous que la table `automobiles` ou `users` existe et a une colonne `id`
            $table->foreign('user_automobile')
                  ->references('id')
                  ->on('automobiles') // ou 'users' si nécessaire
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
        Schema::dropIfExists('infractions');
    }
};
