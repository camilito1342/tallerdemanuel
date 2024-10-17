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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('url', 45);
            $table->string('imageable_id', 45);
            $table->string('imageable_type', 45);

        });
    }

    /**ph
     * Reverse the migrations.
     */
    public function down(): voidpos
    {
        Schema::dropIfExists('images');
    }
};