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
            $table->string("lat")->default("");
            $table->string("lang")->default("");
            $table->string("zoom")->default("10");
            $table->string("type")->default("roadmap");
            $table->string("hue_color")->default("fc721e");
            $table->string("title^ru")->default("");
            $table->string("title^en")->default("");
            $table->string("title^uz")->default("");
            $table->string("body^ru")->default("");
            $table->string("body^en")->default("");
            $table->string("body^uz")->default("");
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
