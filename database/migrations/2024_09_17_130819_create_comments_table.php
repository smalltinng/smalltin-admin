<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id(); // Primary key (auto-incrementing)
            $table->unsignedBigInteger('user_id'); // Foreign key for the user
            $table->unsignedBigInteger('monthly_stat_id'); // Foreign key for monthly stat
            $table->text('comment'); // Comment content
            $table->timestamps(); // Created at and Updated at

            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('monthly_stat_id')->references('id')->on('monthly_stats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
