<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormGroup extends Model
{
    protected $table = 'ev_form_groups';
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string',
    ];
}
