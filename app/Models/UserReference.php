<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserReference extends Model
{
    protected $fillable = [
        'user_id', 'account_id', 'description'
    ];
    protected $table = 'user_references';
}
