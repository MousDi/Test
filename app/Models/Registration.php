<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    public $timestamps = false;
    
  
    protected $fillable = [
        'user_id',
        'package_id'
    ];
}