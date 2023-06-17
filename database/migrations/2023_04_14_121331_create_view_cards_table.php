<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $card_view = "CREATE VIEW view_cards AS 
        SELECT 
            cards.*,
            (SELECT name FROM users
                WHERE users.id = cards.id_user
            ) AS name,
            (SELECT email FROM users
                WHERE users.id = cards.id_user
            ) AS email,
            (SELECT picture FROM users
                WHERE users.id = cards.id_user
            ) AS picture,
            (SELECT COUNT(id_card) FROM comments 
                WHERE comments.id_card = cards.id_card
            ) AS num_comment, 
            (SELECT COUNT(id_card) FROM likes 
                WHERE likes.id_card = cards.id_card
            ) AS num_like,
            (SELECT name_category FROM categories
                WHERE categories.id_category = cards.id_category
            ) AS category
        FROM cards";
        
        \DB::statement($card_view);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::statement("DROP VIEW IF EXISTS `view_cards`");
    }
}
