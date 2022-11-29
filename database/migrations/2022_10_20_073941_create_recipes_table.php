<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('prep_time');
            $table->integer('cook_time');
            $table->string('serving');
            $table->string('ingredient1');
            $table->string('ingredient2');
            $table->string('ingredient3');
            $table->string('ingredient4');
            $table->string('ingredient5')->nullable();
            $table->string('ingredient6')->nullable();
            $table->string('ingredient7')->nullable();
            $table->string('ingredient8')->nullable();
            $table->string('ingredient9')->nullable();
            $table->string('ingredient10')->nullable();
            $table->string('ingredient11')->nullable();
            $table->string('ingredient12')->nullable();
            $table->string('ingredient13')->nullable();
            $table->string('ingredient14')->nullable();
            $table->string('ingredient15')->nullable();
            $table->string('ingredient16')->nullable();
            $table->string('ingredient17')->nullable();
            $table->string('ingredient18')->nullable();
            $table->string('ingredient19')->nullable();
            $table->string('ingredient20')->nullable();
            $table->longText('preparation');
            $table->string('tip')->nullable();
            $table->string('note')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('difficulty_id')->constrained('difficulties')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
};
