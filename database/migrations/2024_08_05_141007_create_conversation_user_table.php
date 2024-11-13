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
        Schema::create('conversation_admin', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('conversation_id');
            $table->unsignedBigInteger('admin_id');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('conversation_id')
                  ->references('id')
                  ->on('conversations')
                  ->cascadeOnDelete();

            $table->foreign('admin_id')
                  ->references('id')
                  ->on('admins')
                  ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conversation_user');
    }
};
