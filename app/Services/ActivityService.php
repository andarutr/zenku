<?php
namespace App\Services;

use App\Models\Activity;

class ActivityService 
{
    public function destroy()
    {
        Activity::truncate();
    }
}