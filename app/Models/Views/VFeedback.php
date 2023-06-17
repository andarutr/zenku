<?php

namespace App\Models\Views;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VFeedback extends Model
{
    use HasFactory;
    public $table = 'view_feedbacks';
    protected $guarded = [];
}
