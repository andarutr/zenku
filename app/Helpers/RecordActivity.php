<?php
namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecordActivity {
    public static function track($do)
    {
        \DB::table('activity')->insert([
            'user_id' => Auth::user()->id,
            'activity' => $do,
            'created_at' => now()
        ]);
    }
}