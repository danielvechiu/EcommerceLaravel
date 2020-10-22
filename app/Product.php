<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ["*"];

    public function category()
    {
        $this->hasOne('category');
    }
}
