<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forums', function (Blueprint $table) {
            $table->increments('id_forum');
            $table->unsignedInteger('id_user');
            $table->string('title_forum', 128);
            $table->text('description');
            $table->string('url_forum', 128);
            $table->integer('views_forum');
            $table->string('updated_at', 25);
            $table->string('created_at', 25);

            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forums');
    }
}
