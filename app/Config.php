<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $fillable = ['user_id','currency_id', 'created_at', 'updated_at'];
}
