<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function cocktails()
    {
        $this->belongsToMany(App\Cocktail::class);
    }

    public function user()
    {
        $this->belongsTo(App\User::class);
    }
}
