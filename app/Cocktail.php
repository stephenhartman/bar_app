<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cocktail extends Model
{
    public function order()
    {
        $this->hasMany(Order::class);
    }
}
