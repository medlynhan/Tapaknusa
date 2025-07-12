<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\History;
use Illuminate\Support\Facades\Auth;
use App\Models\TicketType;
use App\Models\Cart;
use Illuminate\Support\Facades\Log;
use App\Models\Attraction;
use Illuminate\Support\Facades\DB;

class ProfileController
{
    public function getProfileData()
    {
        // Ambil data user yang sedang login
        $user = User::where('id', Auth::id())->first();

        // Ambil riwayat pembelian barang yang sudah dilakukan oleh user
        $history = History::join('msttickettypes', 'mshistory.ticket_type_id', '=', 'msttickettypes.id')
            ->join('msattractions', 'msttickettypes.attraction_id', '=', 'msattractions.id')
            ->where('mshistory.user_id', Auth::id())
            ->select('mshistory.*', 
                    'msttickettypes.title as ticket_title', 
                    'msattractions.title as attraction_title', 
                    'msttickettypes.price', 
                    'mshistory.quantity', 
                    'mshistory.created_at',
                    'msttickettypes.category', 
                    'msttickettypes.description',
                    \DB::raw('CONCAT("https://tapaknusa-images.imgix.net/", SUBSTRING_INDEX(msattractions.image1, "/", -1), "?auto=compress&fm=webp") as image1'),
                    'mshistory.id as history_id')
            ->get();
        return view('afterLogin.profile', compact('user', 'history'));
    }
    
    public function changeProfileData(Request $request)
    {
        $user = User::where('id', Auth::id())->first();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
        ]);

        // Update data pengguna
        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();
        return view('afterLogin.profile');
    }

}
