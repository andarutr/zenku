<?php
namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecordActivity {
    public static function track($do)
    {
        \DB::table('activity')->insert([
            'id_user' => Auth::user()->id,
            'activity' => $do,
            'created_at' => now()
        ]);
    }
}