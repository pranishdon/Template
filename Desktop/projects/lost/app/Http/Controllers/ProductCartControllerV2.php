<?php

namespace App\Http\Controllers;


use Illuminate\Database\Eloquent\Models;
use Illuminate\Http\Request;
use App\Models\CartItems;
use App\Models\Carts;
use App\Models\Product;



class ProductCartControllerV2 extends Controller
{
     function addToCart(Request $request)
    {
        // Check if the user is authenticated

        $user = auth()->user();
        $productId = $request->input('product_id');


        // Check if the user has a cart, create one if not
        if (!$user->cart) {
            $cart = Cart::create(['user_id' => $user->id]);
            $cartId = $cart->id;

        } else {
            $cartId = $user->cart->id;
        }

        // Get the product details
        $product = Product::find($productId);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        // Check if the product already exists in the cart
        $existingCartItem = CartItems::where('product_id', $productId)
            ->where('cart_id', $cartId)
            ->first();

        if ($existingCartItem) {
            // If the product exists, increment the quantity
            $existingCartItem->update([
                'quantity' => $existingCartItem->quantity + 1,
            ]);
        } else {
            // If the product doesn't exist, create a new CartItems record
            CartItems::create([
                'product_id' => $productId,
                'cart_id' => $cartId,
                'quantity' => 1, // Initial quantity

            ]);
        }

        return response()->json(['message' => 'Product added to cart']);





    }





}
