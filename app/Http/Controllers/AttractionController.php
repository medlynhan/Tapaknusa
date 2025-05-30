<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attraction;
use App\Models\History;
use App\Models\TicketTypes;

class AttractionController extends Controller
{
    public function getAllItems()
    {
        $allAttractions = Attraction::where('status', 'atraksi')->get();
        $allFestivals = Attraction::where('status', 'festival')->get();

        return view('attraction', compact('allAttractions','allFestivals'));
    }


    public function getItemsByRating()
    {
        $festivalsByRating = Attraction::where('status', 'festival')
            ->where('rating', '>', 4.8)
            ->get();
        
        $attractionsByRating = Attraction::where('status', 'festival')
        ->where('rating', '>', 4.8)
        ->get();

            return view('attraction', compact('attractionsByRating','festivalsByRating'));
    }


    public function getItemsByHistory()
    {

        $festivalsByHistory = History::select('mshistory.ticket_type_id', \DB::raw('SUM(mshistory.quantity) as total_quantity'))
            ->join('mstickettypes', 'mstickettypes.id', '=', 'mshistory.ticket_type_id')
            ->join('msattractions', 'msattractions.id', '=', 'mstickettypes.attraction_id')
            ->where('msattractions.status', 'festival')  
            ->groupBy('mshistory.ticket_type_id')
            ->orderByDesc('total_quantity')
            ->limit(7)
            ->get();

        $attractionsByHistory = History::select('mshistory.ticket_type_id', \DB::raw('SUM(mshistory.quantity) as total_quantity'))
            ->join('mstickettypes', 'mstickettypes.id', '=', 'mshistory.ticket_type_id')
            ->join('msattractions', 'msattractions.id', '=', 'mstickettypes.attraction_id')
            ->where('msattractions.status', 'attraction')  
            ->groupBy('mshistory.ticket_type_id')
            ->orderByDesc('total_quantity')
            ->limit(7)
            ->get();


        return view('history', compact('attractionsByHistory', 'festivalsByHistory'));
    }



}
