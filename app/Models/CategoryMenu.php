<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryMenu extends Model
{
    protected $table = 'category_menu';

    protected $guarded = [];
    
    public $timestamps = FALSE;

    public function menu()
    {
        return $this->hasMany(Menu::class);
    }
}
