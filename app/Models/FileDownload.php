<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FileDownload extends Model
{
    protected $table = 'file_download';
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string',
    ];
}
