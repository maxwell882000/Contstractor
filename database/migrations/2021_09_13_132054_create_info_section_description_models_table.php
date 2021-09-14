<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoSectionDescriptionModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_section_description_models', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("info_section_model_id");
            $table->string("header^ru");
            $table->string("header^en");
            $table->string("header^uz");
            $table->text("body^ru");
            $table->text("body^en");
            $table->text("body^uz");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_section_description_models');
    }
}
