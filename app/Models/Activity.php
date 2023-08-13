<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activity';

    protected $guarded = [];

    public $timestamps = FALSE;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
