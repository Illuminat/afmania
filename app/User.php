<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    const UPDATED_AT = 'last_update_time';

    protected $fillable = [
        'first_name', 'last_name', 'email', 'username', 'password', 'is_active'
    ];

    protected $hidden = [
        'password', 'created_at'
    ];

    protected $attributes = [
        'is_active' => true
    ];
}
