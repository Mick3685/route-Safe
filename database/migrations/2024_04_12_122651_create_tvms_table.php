<?php

use App\Models\automobile;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTvmsTable extends Migration
{
    /**
     * Exécute les migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tvms', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(automobile::class)->constrained();
            $table->string('agence_de_paiement');
            $table->date('date_paiement');
            $table->date('date_expiration');
            $table->timestamps(); 
        });
    }

    /**
     * Annule les migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tvms');
    }
}
