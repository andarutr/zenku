<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/cards.json');
        $cards = json_decode($json);

        foreach($cards as $card)
        {
            \DB::table('cards')->insert([
                'category_id' => $card->category_id,
                'user_id' => $card->user_id,
                'title_card' => $card->title_card,
                'picture_card' => $card->picture_card,
                'video_card' => $card->video_card,
                'description' => $card->description,
                'url_card' => $card->url_card,
                'is_active' => $card->is_active,
                'visit' => $card->visit,
                'updated_at' => $card->updated_at,
                'created_at' => $card->created_at
            ]);
        }
    }
}
