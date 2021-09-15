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
            $table->bigInteger("info_section_model_id")->default(0);
            $table->string("title^ru")->default("");
            $table->string("title^en")->default("");
            $table->string("title^uz")->default("");
            $table->text("body^ru")->default("");
            $table->text("body^en")->default("");
            $table->text("body^uz")->default("");
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
