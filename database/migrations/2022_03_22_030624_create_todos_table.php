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
            $table->tinyInteger('number');
            $table->string('name')->unique();
            $table->string('contactinfo')->unique();
            $table->tinyInteger('quanity');
            $table->string('servicesoftware');
            $table->tinyInteger('price');
            $table->string('purchasedate');
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
