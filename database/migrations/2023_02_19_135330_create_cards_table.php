<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id_card');
            $table->unsignedInteger('id_category');
            $table->unsignedInteger('id_user');
            $table->string('title_card', 128)->nullable();
            $table->string('picture_card', 128)->nullable();
            $table->string('video_card', 128)->nullable();
            $table->text('description');
            $table->string('url_card', 128);
            $table->string('is_active', 25);
            $table->integer('visit');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_category')->references('id_category')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
