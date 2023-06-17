<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $comment_view = "CREATE VIEW view_comments AS 
        SELECT 
            comments.id_comment,
            comments.comment,
            comments.created_at,
            comments.updated_at,
            (SELECT title_card FROM cards
                WHERE cards.id_card = comments.id_card
            ) AS title,
            (SELECT name FROM users
                WHERE users.id = comments.id_user
            ) AS name,
            (SELECT email FROM users
                WHERE users.id = comments.id_user
            ) AS email,
            (SELECT name FROM users
                WHERE users.id = comments.id_author
            ) AS author,
            (SELECT picture FROM users
                WHERE users.id = comments.id_user
            ) AS picture
        FROM comments";
        
        \DB::statement($comment_view);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::statement("DROP VIEW IF EXISTS `view_comments`");
    }
}
