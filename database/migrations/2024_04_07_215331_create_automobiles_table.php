<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->unsignedBigInteger('id_User');
            $table->string('num_immat');
            $table->string('marque');
            $table->string('modele');
            $table->date('date_immat');
            $table->string('num_immat_precedent')->nullable();
            $table->timestamps();

            // Assurez-vous d'ajouter les relations de clé étrangère si nécessaires.
            $table->foreign('id_User')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade'); // Mettre à jour la relation avec la table users
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
