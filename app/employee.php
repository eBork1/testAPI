<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $fillable = ['name', 'age', 'favorite color', 'profile'];
}
