<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $table = 'menus';
    protected $primaryKey = 'menu_id';

    public function childs() {

        return $this->hasMany('App\Models\Menus','parent_id','menu_id') ;

    }
}
