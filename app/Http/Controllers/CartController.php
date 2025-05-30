<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function getAllUserCartItems($user_id)
    {
        $userCart = Cart::all()::where('user_id', '$user_id')->get(); 
        /*yg user_id pertama itu utk Cart, yang kedua bru masukan  */
        return view('cart', compact('userCart')); 
    }

    public function addItems(Request $request)
    {
        /*Request $request dalam Laravel digunakan untuk menangani data yang dikirimkan oleh 
        pengguna (user) melalui form atau permintaan HTTP lainnya. */

        /*Request memiliki berbagai macam tipe
          POST = simpan data ke server
          PUT = update data dr server
          GET = ambil data dr server
          DELETE = hapus data dr server*/

        $items = $request->input('items'); 

        // Loop untuk menyimpan setiap item ke dalam cart
        foreach ($items as $item) {
            Cart::create([
                'ticket_type_id' => $item['ticket_type_id'],
                'user_id' => auth()->user()->id,  // Misalnya, menggunakan user yang sedang login
                'quantity' => $item['quantity']
            ]);
        }

    }

    public function deleteItems($id)
    {
        $cartItem = Cart::find($id);

        if ($cartItem) {
            $cartItem->delete();  
            return redirect()->route('cart.index')->with('success', 'Item deleted successfully!');
        } else {
            return redirect()->route('cart.index')->with('error', 'Item not found!');
        }
    }

}
