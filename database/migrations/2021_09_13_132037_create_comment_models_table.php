<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_models', function (Blueprint $table) {
            $table->id();
            $table->string("body^ru");
            $table->string("body^uz");
            $table->string("body^en");
            $table->string("name^ru");
            $table->string("name^uz");
            $table->string("name^en");
            $table->string("profession^ru");
            $table->string("profession^uz");
            $table->string("profession^en");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment_models');
    }
}
