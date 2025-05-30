<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TicketType;

class TicketTypesController extends Controller
{
    public function getAllTicketTypes()
    {
        $ticketTypes = TicketType::all(); // Mengambil semua data dari model TicketType

        return view('ticketTypes', compact('ticketTypes')); // Mengirim data ke view ticketTypes.blade.php
    }


    
}
