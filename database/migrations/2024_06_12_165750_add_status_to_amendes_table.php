<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToAmendesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('amendes', function (Blueprint $table) {
            $table->string('status')->default('unpaid')->after('delaidepaiement');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('amendes', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
