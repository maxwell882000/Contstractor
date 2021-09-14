<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoogleMapConfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('google_map_confs', function (Blueprint $table) {
            $table->id();
            $table->string("lat");
            $table->string("lang");
            $table->string("zoom");
            $table->string("type");
            $table->string("hue_color");
            $table->string("title");
            $table->string("content");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('google_map_confs');
    }
}
