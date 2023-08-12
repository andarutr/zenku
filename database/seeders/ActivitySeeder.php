<?php

namespace Database\Seeders;

use File;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/activity.json');
        $activity = json_decode($json);

        foreach($activity as $act)
        {
            \DB::table('activity')->insert([
                'user_id' => $act->user_id,
                'activity' => $act->activity,
                'created_at' => $act->created_at
            ]);
        }
    }
}
