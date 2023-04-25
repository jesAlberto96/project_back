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
        Schema::create('poll_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('poll_id');
            $table->foreignId('question_id');
            $table->foreignId('type_poll_id');
            $table->foreignId('hair_expert_id');
            $table->string('response', 1000);

            $table->foreign('poll_id')->references('id')->on('polls')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('master_questions');
            $table->foreign('type_poll_id')->references('id')->on('types_polls');
            $table->foreign('hair_expert_id')->references('id')->on('hair_experts');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poll_answers');
    }
};
