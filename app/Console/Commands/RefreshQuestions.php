<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
class RefreshQuestions extends Command
{
    protected $signature = 'refresh:questions';
    protected $description = 'Drop, recreate, and seed the questions table';

    public function handle()
    {
        // Drop the table if it exists
        Schema::dropIfExists('questions');

        // Recreate the table
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("field_id");
            $table->foreign('field_id')->references('id')->on("fields")->cascadeOnDelete();
            $table->unsignedBigInteger("sub_fields_id");
            $table->foreign("sub_fields_id")->references("id")->on("sub_fields");
            $table->string('question');
            $table->string('a')->nullable();
            $table->string('b')->nullable();
            $table->string('c')->nullable();
            $table->string('d')->nullable();
            $table->string('answer');
            $table->timestamps();
        });

        // Seed the table with new data
        Artisan::call('db:seed', [
            '--class' => 'Questions',
        ]);

      

        $this->info('Questions table refreshed successfully.');
    }
}
