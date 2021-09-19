<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalsDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals_descriptions', function (Blueprint $table) {
            $table->id();
            $table->string("name^ru");
            $table->string("name^uz");
            $table->string("name^en");
            $table->string("body^ru");
            $table->string("body^uz");
            $table->string("body^en");
            $table->bigInteger("personals_title_id")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personals_descriptions');
    }
}
