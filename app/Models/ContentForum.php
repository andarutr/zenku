<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentForum extends Model
{
    protected $table = 'content_forums';

    protected $guarded = [];

    public $timestamps = FALSE;
    
    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
