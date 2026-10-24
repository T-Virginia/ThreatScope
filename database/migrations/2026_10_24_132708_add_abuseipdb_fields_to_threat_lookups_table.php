<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('threat_lookups', function (Blueprint $table) {
            $table->unsignedTinyInteger('abuse_confidence_score')->nullable();
            $table->unsignedInteger('total_reports')->nullable();
            $table->string('country_code', 2)->nullable();
            $table->string('isp')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('threat_lookups', function (Blueprint $table) {
            $table->dropColumn([
        'abuse_confidence_score',
        'total_reports',
        'country_code',
        'isp',
    ]);
        });
    }
};
