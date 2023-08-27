<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EvForm extends Model{
    protected $table = 'ev_forms';
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string',
    ];
}
