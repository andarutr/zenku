<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContentForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('content_forums')->insert([
        'id_forum' => 1,
        'id_user' => 1,
        'text_forum' => 'Terimakasih telah mengisi thread forum!',
        'updated_at' => date('d F Y'),
        'created_at' => date('d F Y')
      ]);
    }
}
