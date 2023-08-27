<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormGroupField extends Model{
    protected $table = 'ev_form_group_fields';
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string',
    ];
}
