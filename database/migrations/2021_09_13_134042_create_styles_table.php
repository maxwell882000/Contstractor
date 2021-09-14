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
            $table->string("choice_color"); // green
            $table->string("main_color");
            $table->string("emphasize_color");
            $table->string("title_color");
            $table->string("secondary_color");
            $table->string("common_icon");
            $table->string("intro_section_before_color_home");
            $table->string("scroll_up_color");
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
