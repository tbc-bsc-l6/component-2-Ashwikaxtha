<?php

namespace App\Models;
// namespace App\Models\Product;
// namespace App\Models\Cart;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne('App\Models\User','id','user_id');
    }

    public function product()
    {
        return $this->hasOne('App\Models\Product','id','product_id');
    }
}
