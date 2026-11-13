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
            $table->unsignedTinyInteger('ip_version')->nullable();
            $table->boolean('is_white_listed')->nullable();
            $table->string('country_name', 255)->nullable();
            $table->string('usage_type', 255)->nullable();
            $table->boolean('is_tor')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('threat_lookups', function (Blueprint $table) {
            //
        });
    }
};
