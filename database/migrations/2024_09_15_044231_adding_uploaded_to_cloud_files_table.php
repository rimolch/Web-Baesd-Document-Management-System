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
        Schema::table('cloud_files', function (Blueprint $table) {
            $table->boolean('uploaded_on_cloud')->default(1)->after('size');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cloud_files', function (Blueprint $table) {
            $table->dropColumn('uploaded_on_cloud');
        });
    }
};
