<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $guarded = [];

    public $timestamps = FALSE;
    
    public function content_forum()
    {
        return $this->hasMany(ContentForum::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
