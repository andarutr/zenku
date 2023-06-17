<?php

namespace App\Models\Views;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VMenu extends Model
{
    use HasFactory;
    public $table = 'view_menus';
    protected $guarded = [];
}
