<?php

namespace App\Http\Controllers;
namespace App\Models;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carts extends Controller
{
    use HasFactory;

    protected $fillable =[
      'user_id',
    ];

    public function cartItems()
    {
        return $this->hasMany(CartItems::class);
    }
}







