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
        Schema::create('master_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_poll_id');
            $table->string('label');
            $table->string('type');
            $table->string('name')->unique();
            $table->string('class')->nullable();
            $table->json('values')->nullable();
            $table->boolean('status')->default(true);
            $table->boolean('required')->default(true);

            $table->foreign('type_poll_id')->references('id')->on('types_polls');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_questions');
    }
};
