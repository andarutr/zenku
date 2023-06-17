<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $menu_view = "CREATE VIEW view_menus AS 
        SELECT 
            menu.id_menu,
            menu.name_menu,
            menu.url_menu,
            menu.icon_menu,
            (SELECT name_category_menu FROM category_menu
                WHERE category_menu.id_category_menu = menu.id_category_menu
            ) AS category,
            (SELECT name_role FROM roles
                WHERE roles.id_role = menu.id_role
            ) AS role
        FROM menu";
        
        \DB::statement($menu_view);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::statement("DROP VIEW IF EXISTS `view_menus`");
    }
}
