<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('questions', function (Blueprint $table) {
            // Adding user_id column with the 'set null' delete behavior
            $table->unsignedBigInteger('user_id')->nullable();  // Nullable in case you don't want to enforce user association initially
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');  // Set user_id to null when user is deleted
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};