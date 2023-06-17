<?php

namespace App\Models\Views;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VLike extends Model
{
    use HasFactory;
    public $table = 'view_likes';
    protected $guarded = [];
}
