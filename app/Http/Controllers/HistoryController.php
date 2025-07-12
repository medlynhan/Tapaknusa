<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\History;
use App\Models\TickeType;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use App\Models\Attraction;
use Illuminate\Support\Facades\DB;


class HistoryController 
{
    public function makePayment(){
        // Fetch all cart items with necessary joins
        $allItems = Cart::where('user_id', Auth::id())
            ->join('msttickettypes', 'msusercart.ticket_type_id', '=', 'msttickettypes.id')
            ->join('msattractions', 'msttickettypes.attraction_id', '=', 'msattractions.id')
            ->select('msusercart.*', 
                    'msttickettypes.title as ticket_title', 
                    'msattractions.title as attraction_title',
                     \DB::raw('CONCAT("https://tapaknusa-images.imgix.net/", SUBSTRING_INDEX(msattractions.image1, "/", -1), "?auto=compress&fm=webp") as image1'),
                    'msttickettypes.price', 
                    'msusercart.quantity', 
                    'msttickettypes.category', 
                    'msttickettypes.description',
                    'msusercart.id as cart_id',
                    'msusercart.ticketDate')
            ->get();

        // Calculate the total price by summing the total_price of each item
        $totalPrice = $allItems->sum(function ($item) {
            return $item->quantity * $item->price; // Calculate total price for each item
        });
        
        // Pass the totalPrice to the view
        return view('afterLogin.pay', compact('allItems', 'totalPrice'));
    }

    public function addToHistory(Request $request){
        $allItems = json_decode($request->input('allItems'), true);
        //dd($allItems);  
        foreach ($allItems as $ticket) {
            // Menyimpan data tiket ke dalam tabel History
            $history=History::create([
                'ticket_type_id' => $ticket['ticket_type_id'], // Menggunakan data tiket_id dari array
                'quantity' => $ticket['quantity'],  // Menggunakan quantity dari array
                'user_id' => Auth::id(),   
                'ticketDate' => $ticket['ticketDate'],    // Menggunakan user_id yang sedang login
            ]);

            //dd($history);
        }

        return redirect()->route('home');
    }

}
