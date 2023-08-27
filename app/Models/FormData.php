<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    protected $table = 'form_data';
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'form_id' => 'string',
    ];
}
