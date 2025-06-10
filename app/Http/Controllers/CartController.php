<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\Attraction;


class CartController
{   

    public function addToCart(Request $request)
    {
        $tickets = $request->input('tickets');


        foreach ($tickets as $item) {
            // Pastikan data id dan quantity ada
            $userCart = Cart::where('user_id', Auth::id())
                            ->where('ticket_type_id', $item['id']) // Cek apakah sudah ada ticket_type_id yang sama
                            ->first(); // Mengambil satu data pertama jika ada

            if ($userCart) {
                $userCart->quantity += $item['quantity']; 
                $userCart->save(); 
            } else {
               
                Cart::create([
                    'ticket_type_id' => $item['id'], 
                    'user_id' => Auth::id(),
                    'quantity' => $item['quantity']
                ]);
            }
        }

    }

    public function editCart(Request $request)
    {
        // Periksa apakah data editItem ada
        $editItem = $request->input('editItem');

        if (!$editItem || !isset($editItem['id']) || !isset($editItem['quantity'])) {
            return response()->json(['message' => 'Invalid data'], 400);
        }

        // Dapatkan item dari database
        $userCart = Cart::where('id', $editItem['id'])->first();

        if ($userCart) {
            $userCart->quantity = $editItem['quantity'];
            $userCart->save();
            return response()->json(['message' => 'Cart updated successfully']);
        } else {
            return response()->json(['message' => 'Item not found'], 404);
        }
    }



    public function deleteCart(Request $request)
    {
        $id = $request->input('id');
        dd($id);  // Cek apakah ID sudah diterima dengan benar

        $userCart = Cart::where('id', $id)->first();

        if (!$userCart) {
            return response()->json(['error' => 'Cart item not found'], 404);  // Jika cart tidak ditemukan, return error 404
        }

        $userCart->delete();
        return $this->showCart();  // Mengembalikan cart yang sudah diperbarui setelah penghapusan
    }


    public function showCart(){

        $attractionRecomendation = Attraction::where('rating', '>', 4.8)->get();
        $allUserItem = Cart::join('msttickettypes', 'msusercart.ticket_type_id', '=', 'msttickettypes.id')
            ->join('msattractions', 'msttickettypes.attraction_id', '=', 'msattractions.id')
            ->where('msusercart.user_id', Auth::id())
            ->select('msusercart.*', 
                    'msttickettypes.title as ticket_title', 
                    'msattractions.title as attraction_title', 
                    'msttickettypes.price', 
                    'msusercart.quantity', 
                    'msttickettypes.category', 
                    'msttickettypes.description',
                    'msattractions.image1',
                    'msusercart.id as cart_id')
            ->get();
 
        $totalPrice = 0;

         foreach ($allUserItem as $cartItem) {
            // Ambil data harga tiket dari TicketType
            $ticket = $cartItem->ticketType;  // Relasi ke TicketType
            if ($ticket) {
                // Tambahkan harga tiket * quantity ke total price
                $totalPrice += $ticket->price * $cartItem->quantity;
            }
        }

        
        
         return view('afterLogin.cart', compact('attractionRecomendation', 'allUserItem','totalPrice'));
         
    }

}
