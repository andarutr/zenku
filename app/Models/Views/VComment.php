<?php

namespace App\Models\Views;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VComment extends Model
{
    use HasFactory;
    public $table = 'view_comments';
    protected $guarded = [];
}
