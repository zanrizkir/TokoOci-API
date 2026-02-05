<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        $items = Cart::with('product.category')
            ->where('user_id', $user->id)
            ->get();

        $totalPrice = $items->sum(fn ($i) => $i->product->price * $i->quantity);

        return response()->json([
            'success' => true,
            'message' => 'Cart loaded',
            'data' => [
                'items' => $items,
                'total_items' => $items->count(),
                'total_price' => $totalPrice,
            ]
        ]);
    }

    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_id' => 'required|exists:products,id',
            'quantity'   => 'required|integer|min:1|max:10',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'errors'  => $validator->errors(),
            ], 422);
        }

        $user = $request->user();
        $product = Product::findOrFail($request->product_id);

        if ($product->stock < $request->quantity) {
            return response()->json([
                'success' => false,
                'message' => 'Stock tidak mencukupi',
            ], 400);
        }

        $cart = Cart::where('user_id', $user->id)
            ->where('product_id', $product->id)
            ->first();

        if ($cart) {
            $cart->update([
                'quantity' => $cart->quantity + $request->quantity
            ]);
        } else {
            Cart::create([
                'user_id'    => $user->id,
                'product_id' => $product->id,
                'quantity'   => $request->quantity,
            ]);
        }

        return $this->index($request);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|integer|min:1|max:10',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'errors'  => $validator->errors(),
            ], 422);
        }

        $user = $request->user();

        $cart = Cart::where('user_id', $user->id)
            ->where('id', $id)
            ->firstOrFail();

        $product = Product::findOrFail($cart->product_id);

        if ($product->stock < $request->quantity) {
            return response()->json([
                'success' => false,
                'message' => 'Stock tidak mencukupi',
            ], 400);
        }

        $cart->update(['quantity' => $request->quantity]);

        return $this->index($request);
    }

    public function remove(Request $request, $id)
    {
        $user = $request->user();

        Cart::where('user_id', $user->id)
            ->where('id', $id)
            ->delete();

        return $this->index($request);
    }

    public function clear(Request $request)
    {
        $user = $request->user();

        Cart::where('user_id', $user->id)->delete();

        return response()->json([
            'success' => true,
            'message' => 'Cart cleared',
            'data' => [
                'items' => [],
                'total_items' => 0,
                'total_price' => 0,
            ]
        ]);
    }
}
