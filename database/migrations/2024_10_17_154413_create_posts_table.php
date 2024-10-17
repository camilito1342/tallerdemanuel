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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            $table->string('slug', 45);
            $table->string('extract', 45); 
            $table->string('body', 45); 
            $table->string('status', 45); 
            $table->integer('categories_id'); 
            $table->integer('user');             
        });
    }

    /**ph
     * Reverse the migrations.
     */
    public function down(): voidpos
    {
        Schema::dropIfExists('posts');
    }
};
