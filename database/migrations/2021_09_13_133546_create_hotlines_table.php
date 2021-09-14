<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotlines', function (Blueprint $table) {
            $table->id();
            $table->string("mini_header^ru");
            $table->string("mini_header^uz");
            $table->string("mini_header^en");
            $table->string("phone");
            $table->text("motivation_body^ru");
            $table->text("motivation_body^uz");
            $table->text("motivation_body^en");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotlines');
    }
}
