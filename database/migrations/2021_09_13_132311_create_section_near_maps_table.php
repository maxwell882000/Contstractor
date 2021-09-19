<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionNearMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_near_maps', function (Blueprint $table) {
            $table->id();
            $table->string("title^uz");
            $table->string("title^ru");
            $table->string("title^en");
            $table->string("header^uz");
            $table->string("header^ru");
            $table->string("header^en");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('section_near_maps');
    }
}
