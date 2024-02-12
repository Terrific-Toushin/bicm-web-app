<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPrivileges extends Model
{
    protected $table = 'user_privileges';
    protected $primaryKey = 'user_id';
}
