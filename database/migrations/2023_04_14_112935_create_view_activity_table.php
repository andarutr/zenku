<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $activity_view = "CREATE VIEW view_activity AS 
        SELECT 
            activity.id_activity,
            activity.activity,
            activity.created_at,
            (SELECT name FROM users
                WHERE users.id = activity.id_user
            ) AS name,
            (SELECT picture FROM users
                WHERE users.id = activity.id_user
            ) AS picture
        FROM activity";
        
        \DB::statement($activity_view);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::statement("DROP VIEW IF EXISTS `view_activity`");
    }
}
