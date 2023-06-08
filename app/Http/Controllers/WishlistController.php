<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function wishlistList()
    {
        $wishlistItems = \Cart::getContent();
        //dd($cartItems);
        return view('wishlist', compact('wishlistItems'));
    }


    public function addToWishlist(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->game_title,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->img_cover,
            )
        ]);
        session()->flash('success', 'Product is Added to wishlist Successfully !');

        return redirect()->route('wishlist.list');
    }

    public function updateWishlist(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item wishlist is Updated Successfully !');

        return redirect()->route('wishlist.list');
    }

    public function removeWishlist(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item wishlist Remove Successfully !');

        return redirect()->route('wishlist.list');
    }

    public function clearAllWishlist()
    {
        \Cart::clear();

        session()->flash('success', 'All Item wishlist Clear Successfully !');

        return redirect()->route('wishlist.list');
    }
}
