<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $like_view = "CREATE VIEW view_likes AS 
        SELECT 
            likes.id_like,
            likes.created_at,
            likes.updated_at,
            (SELECT id_card FROM cards
                WHERE cards.id_card = likes.id_card
            ) AS id_card,
            (SELECT title_card FROM cards
                WHERE cards.id_card = likes.id_card
            ) AS title,
            (SELECT picture_card FROM cards
                WHERE cards.id_card = likes.id_card
            ) AS picture_card,
            (SELECT url_card FROM cards
                WHERE cards.id_card = likes.id_card
            ) AS url_card,
            (SELECT name FROM users
                WHERE users.id = likes.id_user
            ) AS name,
            (SELECT name FROM users
                WHERE users.id = likes.id_author
            ) AS author,
            (SELECT picture FROM users
                WHERE users.id = likes.id_user
            ) AS picture
        FROM likes";
        
        \DB::statement($like_view);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::statement("DROP VIEW IF EXISTS `view_likes`");
    }
}
