<?php
namespace App\Services;

use App\Models\Activity;

class ActivityService 
{
    public function get_by_id_user()
    {
        $data = Activity::where('id_user', Auth::user()->id)
                    ->orderByDesc('id_activity')
                    ->join('users','users.id','=','activity.id_user')
                    ->select('users.name','users.picture','activity.*')
                    ->paginate(5);
        
        return $data;
    }

    public function destroy()
    {
        Activity::truncate();
    }
}