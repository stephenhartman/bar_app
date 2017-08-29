<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'total', 'user_id', 'cocktail_id',
    ];

    public function cocktail()
    {
        return $this->belongsTo(Cocktail::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
