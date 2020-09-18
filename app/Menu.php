<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $table = "menus";

    protected $fillable = ['menu_name', 'image', 'stock', ''];
}
