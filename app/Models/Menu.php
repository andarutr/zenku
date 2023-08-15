<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';

    protected $guarded = [];

    public $timestamps = FALSE;

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function category_menu()
    {
        return $this->belongsTo(CategoryMenu::class);
    }
}
