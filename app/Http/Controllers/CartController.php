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
          // Debugging untuk memastikan masuk ke method

        Log::info('Received tickets:', $request->input('tickets'));

        // Ambil data tiket yang dikirimkan melalui AJAX
        $tickets = $request->input('tickets');

        // Jika tiket kosong
        if (empty($tickets)) {
            Log::error('No tickets provided');
            return response()->json(['status' => 'error', 'message' => 'No tickets provided'], 400);
        }

        foreach ($tickets as $item) {
            // Pastikan data id dan quantity ada
            if (!isset($item['id']) || !isset($item['quantity'])) {
                Log::error('Invalid ticket data', ['ticket' => $item]);
                return response()->json(['status' => 'error', 'message' => 'Invalid ticket data'], 400);
            }

            // Validasi quantity
            if (!is_numeric($item['quantity']) || $item['quantity'] <= 0) {
                Log::error('Invalid quantity', ['quantity' => $item['quantity']]);
                return response()->json(['status' => 'error', 'message' => 'Invalid quantity'], 400);
            }

            // Simpan tiket ke database
            Cart::create([
                'ticket_type_id' => $item['id'],
                'user_id' => Auth::id(),
                'quantity' => $item['quantity']
            ]);
        }

        Log::info('Tickets added to cart successfully');
        return response()->json(['status' => 'success', 'message' => 'Tickets added to cart']);
    }


    public function showCart(){

        $attractionRecomendation = Attraction::where('rating', '>', 4.8)->get();
        $allUserItem = Cart::join('msttickettypes', 'msusercart.ticket_type_id', '=', 'msttickettypes.id')
            ->join('msattractions', 'msttickettypes.attraction_id', '=', 'msattractions.id')
            ->where('msusercart.user_id', Auth::id())
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
