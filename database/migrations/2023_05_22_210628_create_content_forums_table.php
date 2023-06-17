<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentForumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_forums', function (Blueprint $table) {
            $table->increments('id_content_forum');
            $table->unsignedInteger('id_forum');
            $table->unsignedInteger('id_user');
            $table->text('text_forum');
            $table->string('updated_at', 25);
            $table->string('created_at', 25);

            $table->foreign('id_forum')->references('id_forum')->on('forums')->onDelete('cascade');
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
        Schema::dropIfExists('content_forums');
    }
}
