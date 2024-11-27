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
        Schema::table('cars', function (Blueprint $table) {
             $table->decimal('offer_amount', 8, 2)->nullable()->after('price_per_day');
             $table->integer('offer_duration')->nullable()->after('offer_amount');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cars', function (Blueprint $table) {
             $table->dropColumn(['offer_amount', 'offer_duration']);
        });
    }
};
