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
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('number');
            $table->string('name')->unique();
            $table->string('contactinfo')->unique();
            $table->tinyInteger('quanity');
            $table->string('services,sooftware');
            $table->tinyInteger('price');
            $table->string('services,sooftware');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todos');
    }
};
