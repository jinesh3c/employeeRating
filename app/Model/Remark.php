<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Remark extends Model
{
    protected $fillable = [
        'user_name', 'point', 'description'
    ];
    
}
