<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('amendes', function (Blueprint $table) {
            $table->unsignedBigInteger('automobile_id')->after('id'); // Ajouter automobile_id
            $table->foreign('automobile_id')->references('id')->on('automobiles')->onDelete('cascade');
            $table->string('description')->nullable()->after('automobile_id'); // Ajouter description
            $table->date('date_inflation')->nullable()->after('description'); // Ajouter date_inflation
            $table->string('lieu')->nullable()->after('date_inflation'); // Ajouter lieu
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('amendes', function (Blueprint $table) {
            $table->dropForeign(['automobile_id']);
            $table->dropColumn('automobile_id');
            $table->dropColumn('description');
            $table->dropColumn('date_inflation');
            $table->dropColumn('lieu');
        });
    }
};
