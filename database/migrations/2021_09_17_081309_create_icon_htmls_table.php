<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIconHtmlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icon_htmls', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("link");
            $table->string("icon_html_type")->nullable($value = true);
            $table->bigInteger("icon_html_id")->nullable($value = true);

            $table->index(["icon_html_type","icon_html_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('icon_htmls');
    }
}
