<?php

namespace App\Models\Views;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VActivity extends Model
{
    use HasFactory;
    public $table = 'view_activity';
    protected $guarded = [];
}
