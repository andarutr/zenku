<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $feedback_view = "CREATE VIEW view_feedbacks AS 
        SELECT 
            feedbacks.id_feedback,
            feedbacks.message,
            feedbacks.created_at,
            feedbacks.updated_at,
            (SELECT name FROM users
                WHERE users.id = feedbacks.id_user
            ) AS name,
            (SELECT picture FROM users
                WHERE users.id = feedbacks.id_user
            ) AS picture
        FROM feedbacks";
        
        \DB::statement($feedback_view);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::statement("DROP VIEW IF EXISTS `view_feedbacks`");
    }
}
