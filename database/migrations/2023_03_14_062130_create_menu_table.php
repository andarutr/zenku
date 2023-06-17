<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->increments('id_menu');
            $table->string('name_menu', 25);
            $table->string('url_menu', 128);
            $table->string('icon_menu', 25);
            $table->unsignedInteger('id_role');
            $table->unsignedInteger('id_category_menu');

            $table->foreign('id_role')->references('id_role')->on('roles');
            $table->foreign('id_category_menu')->references('id_category_menu')->on('category_menu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
