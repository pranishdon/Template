<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItems extends Model
{
    use HasFactory;

    protected $fillable =[

        'cart_id','product_id','quantity',
    ];

    public function Carts(){
      return $this->belongsTO(Carts::class);
    }
    public function products(){

        return $this->belongsTO(Product::class);
    }
}
