<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = [];
    
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function card()
    {
        return $this->hasMany(Card::class);
    }

    public function activity()
    {
        return $this->hasMany(Activity::class);
    }

    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }

    public function forum()
    {
        return $this->hasMany(Forum::class);
    }

    public function content_forum()
    {
        return $this->hasMany(ContentForum::class);
    }

    public function like()
    {
        return $this->hasMany(Like::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
