<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateButtonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buttons', function (Blueprint $table) {
            $table->id();
            $table->string("name^ru")->default("");
            $table->string("name^en")->default("");
            $table->string("name^uz")->default("");
            $table->string("link")->default("");
            $table->string("button_type")->nullable($value = true);
            $table->bigInteger("button_id")->nullable($value = true);
            $table->index(["button_type", "button_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buttons');
    }
}
