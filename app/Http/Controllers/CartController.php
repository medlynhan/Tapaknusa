<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Models\Attraction;


class CartController{
public function addToCart(Request $request)
{
    // Log request yang diterima
    \Log::info('Request data:', $request->all());

    // Validasi input
    $request->validate([
        'tickets.*.id' => 'required|integer',
        'tickets.*.quantity' => 'required|integer',
        'tickets.*.ticketDate' => 'required|string',
    ]);

    $tickets = $request->input('tickets');
    \Log::info('Data yang diterima:', $tickets);

    foreach ($tickets as $item) {
        \Log::info('Proses item tiket:', $item);

        // Pastikan data id dan quantity ada
        \Log::info('Mencari tiket yang sudah ada untuk user_id: ' . Auth::id() . ' dengan ticketDate: ' . $item['ticketDate'] . ' dan ticket_type_id: ' . $item['id']);
        $userCart = Cart::where('user_id', Auth::id())
                        ->where('ticketDate', $item['ticketDate'])
                        ->where('ticket_type_id', $item['id'])
                        ->first(); // Mengambil satu data pertama jika ada

        if ($userCart) {
            // Jika tiket sudah ada, update quantity
            \Log::info('Tiket sudah ada di keranjang, memperbarui quantity: ' . $userCart->quantity);
            $userCart->quantity += $item['quantity'];
            $userCart->save();
            \Log::info('Tiket berhasil diperbarui: ', $userCart->toArray());

            // Mengirimkan response sukses
            return response()->json(['success' => true, 'data' => $userCart]);
        } else {
            // Jika tiket belum ada, buat entri baru
            \Log::info('Tiket baru akan ditambahkan ke keranjang:', $item);
            try {
                $new = Cart::create([
                    'ticket_type_id' => $item['id'],
                    'user_id' => Auth::id(),
                    'quantity' => $item['quantity'],
                    'ticketDate' => $item['ticketDate'],
                ]);

                \Log::info('Tiket baru berhasil ditambahkan:', $new->toArray());

                // Mengirimkan response sukses
                return response()->json(['success' => true, 'data' => $new]);
            } catch (\Exception $e) {
                \Log::error('Terjadi kesalahan saat menambahkan tiket ke keranjang: ' . $e->getMessage());
                \Log::error('Exception detail:', ['message' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
                
                // Mengirimkan response error
                return response()->json(['success' => false, 'message' => 'Tiket gagal ditambahkan']);
            }
        }
    }

    // Jika tidak ada tiket yang diproses
    return response()->json(['success' => false, 'message' => 'Tidak ada tiket yang valid']);
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
        \Log::info('Cart ID: ' . $id);  // Menambahkan log untuk melihat ID yang diterima

        $userCart = Cart::where('id', $id)->first();

        if (!$userCart) {
            \Log::error('Cart item not found for ID: ' . $id);  // Jika cart tidak ditemukan, log error
            return response()->json(['error' => 'Cart item not found'], 404);
        }

        // Jika item cart ditemukan, lanjutkan penghapusan
        $userCart->delete();
        \Log::info('Cart item deleted: ' . $id);  // Log penghapusan berhasil

        return response()->json(['message' => 'Cart item deleted successfully'], 200);
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
                    'msusercart.id as cart_id',
                    'msusercart.ticketDate')
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
