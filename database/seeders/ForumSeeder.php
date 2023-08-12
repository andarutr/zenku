<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('forums')->insert([
        'user_id' => 5,
        'title_forum' => 'Contoh Forum Pertama',
        'description' => 'Deskripsi Forum Pertama',
        'url_forum' => 'contoh-forum-pertama',
        'views_forum' => 1,
        'updated_at' => date('d F Y'),
        'created_at' => date('d F Y')
      ]);
    }
}
