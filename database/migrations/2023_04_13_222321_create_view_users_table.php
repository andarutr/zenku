<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $user_view = "CREATE VIEW view_users AS
        SELECT 
            users.id,
            users.name,
            users.email,
            users.password,
            users.picture,
            users.birthday,
            users.whatsapp,
            users.alamat,
            users.provinsi,
            users.kota_administrasi,
            users.bio,
            users.kode_pos,
            users.status_kenegaraan,
            users.created_at,
            users.updated_at,
            (SELECT name_role FROM roles
                        WHERE roles.id_role = users.id_role
                    ) AS role
        FROM users";

        \DB::statement($user_view);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::statement("DROP VIEW IF EXISTS `view_users`");
    }
}
