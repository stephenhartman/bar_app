<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function cocktails()
    {
        $this->hasMany(App\Cocktail::class);
    }
}
