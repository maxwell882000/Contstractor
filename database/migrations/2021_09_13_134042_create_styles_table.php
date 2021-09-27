<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStylesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('styles', function (Blueprint $table) {
            $table->id();//rgba values all color
            $table->string("choice_color")->default("94,199,156,1"); // green
            $table->string("main_color")->default("255,255,255,1");
            $table->string("emphasize_color")->default("245,176,98,1");
            $table->string("title_color")->default("51,51,51,1");
            $table->string("secondary_color")->default("119,119,119,1");
            $table->string("common_icon")->default("../images/icons/icon-crops.png");
            $table->string("intro_section_before_color_home")->default("244,238,222,0.94");
            $table->string("scroll_up_color")->default("10,10,10,1");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('styles');
    }
}
