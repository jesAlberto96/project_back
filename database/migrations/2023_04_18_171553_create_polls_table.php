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
        Schema::create('polls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id');
            $table->foreignId('hair_expert_id');
            $table->foreignId('type_poll_id');

            $table->foreign('client_id')->references('id')->on('clients');
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
        Schema::dropIfExists('polls');
    }
};
