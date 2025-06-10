<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\History;
use App\Models\Mstickettypes;
use App\Models\Msattractions;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use App\Models\Attraction;


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
                    'msattractions.image1', 
                    'msttickettypes.price', 
                    'msusercart.quantity', 
                    'msttickettypes.category', 
                    'msttickettypes.description',
                    'msusercart.id as cart_id')
            ->get();

        // Calculate the total price by summing the total_price of each item
        $totalPrice = $allItems->sum(function ($item) {
            return $item->quantity * $item->price; // Calculate total price for each item
        });
        
        // Pass the totalPrice to the view
        return view('afterLogin.pay', compact('allItems', 'totalPrice'));
    }

}
