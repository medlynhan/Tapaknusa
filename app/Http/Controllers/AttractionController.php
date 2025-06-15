<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attraction;
use App\Models\History;
use App\Models\TicketTypes;
use App\Models\User;

class AttractionController
{
    public function getAllItems()
    {
        $allAttractions = Attraction::where('status', 'atraksi')->get();
        $allFestivals = Attraction::where('status', 'festival')->get();

        
        return view('beforeLogin.home', compact('allAttractions', 'allFestivals'));
    }

    public function getAllItems2()
    {
        $allAttractions = Attraction::where('status', 'atraksi')->get();
        $allFestivals = Attraction::where('status', 'festival')->get();


        return view('afterLogin.home', compact('allAttractions', 'allFestivals'));
    }

    public function getResult(Request $request){
        $allAttractions = Attraction::where('status', 'atraksi')->get();
        $allFestivals = Attraction::where('status', 'festival')->get();

        $searchQuery = $request->query('find'); 
        $date = $request->query('tanggal'); 

        if($date !== "" && $date !== null){
            $allAttractionResults = Attraction::where('schedule', $date)
                ->orWhereNull('schedule')
                ->where('status', 'atraksi')
                ->whereRaw('LOWER(title) LIKE ?', ['%' . strtolower($searchQuery) . '%'])
                ->get();

            $allFestivalResults = Attraction::where('schedule', $date)
                ->where('status', 'festival')
                ->whereRaw('LOWER(title) LIKE ?', ['%' . strtolower($searchQuery) . '%'])
                ->get();
        }else{
            $allAttractionResults = Attraction::where('status', 'atraksi')
                ->whereRaw('LOWER(title) LIKE ?', ['%' . strtolower($searchQuery) . '%'])
                ->get();

            $allFestivalResults = Attraction::where('status', 'festival')
                ->whereRaw('LOWER(title) LIKE ?', ['%' . strtolower($searchQuery) . '%'])
                ->get();    
        }

       
       
        
        return view('beforeLogin.searchResult', compact('allAttractions', 'allFestivals', 'allAttractionResults','allFestivalResults','searchQuery','date'));
    }


    public function getResult2(Request $request){
        $allAttractions = Attraction::where('status', 'atraksi')->get();
        $allFestivals = Attraction::where('status', 'festival')->get();

        $searchQuery = $request->query('find'); 
        $date = $request->query('tanggal'); 

        if($date !== "" && $date !== null){
            $allAttractionResults = Attraction::where('schedule', $date)
                ->orWhereNull('schedule')
                ->where('status', 'atraksi')
                ->whereRaw('LOWER(title) LIKE ?', ['%' . strtolower($searchQuery) . '%'])
                ->get();

            $allFestivalResults = Attraction::where('schedule', $date)
                ->where('status', 'festival')
                ->whereRaw('LOWER(title) LIKE ?', ['%' . strtolower($searchQuery) . '%'])
                ->get();
        }else{
            $allAttractionResults = Attraction::where('status', 'atraksi')
                ->whereRaw('LOWER(title) LIKE ?', ['%' . strtolower($searchQuery) . '%'])
                ->get();

            $allFestivalResults = Attraction::where('status', 'festival')
                ->whereRaw('LOWER(title) LIKE ?', ['%' . strtolower($searchQuery) . '%'])
                ->get();    
        }

       
       
        
        return view('afterLogin.searchResult', compact('allAttractions', 'allFestivals', 'allAttractionResults','allFestivalResults','searchQuery','date'));
    }

    public function getItemsByTitle(Request $request){
        $searchQuery = $request->query('find'); 
        // Menyebutkan tabel msattractions untuk kolom title
        $detailAttraction = Attraction::where('msattractions.title', $searchQuery)  // Gunakan msattractions.title
            ->get();

        $attractionRecomendation = Attraction::where('rating', '>', 4.8)->get();

        $reviews = Attraction::where('msattractions.title', $searchQuery)  // Gunakan msattractions.title
        ->join('msreviews', 'msattractions.id', '=', 'msreviews.attraction_id')
        ->join('msusers', 'msreviews.user_id', '=', 'msusers.id')
        ->get();

        $ticketTypes = Attraction::where('msattractions.title', $searchQuery)  // Gunakan msattractions.title
        ->join('msttickettypes', 'msattractions.id', '=', 'msttickettypes.attraction_id')
        ->get();


        return view('beforeLogin.detailAtraction', compact('detailAttraction','attractionRecomendation','reviews','ticketTypes'));
    }


    public function getItemsByTitle2(Request $request){
        $searchQuery = $request->query('find'); 
        // Menyebutkan tabel msattractions untuk kolom title
        $detailAttraction = Attraction::where('msattractions.title', $searchQuery)  // Gunakan msattractions.title
            ->get();

        $attractionRecomendation = Attraction::where('rating', '>', 4.8)->get();

        $reviews = Attraction::where('msattractions.title', $searchQuery)  // Gunakan msattractions.title
        ->join('msreviews', 'msattractions.id', '=', 'msreviews.attraction_id')
        ->join('msusers', 'msreviews.user_id', '=', 'msusers.id')
        ->get();

        $ticketTypes = Attraction::where('msattractions.title', $searchQuery)  // Gunakan msattractions.title
        ->join('msttickettypes', 'msattractions.id', '=', 'msttickettypes.attraction_id')
        ->get();


        return view('afterLogin.detailAtraction', compact('detailAttraction','attractionRecomendation','reviews','ticketTypes'));
    }



    public function getWisataBudaya(Request $request){
        $location = $request->query('find'); 
        // Menyebutkan tabel msattractions untuk kolom title
        $atraksiBudaya = Attraction::where('msattractions.destination', $location)  // Gunakan msattractions.title
            ->where('status', 'atraksi')
            ->get();

        $festivalBudaya = Attraction::where('msattractions.destination', $location)  // Gunakan msattractions.title
            ->where('status', 'festival')
            ->get();

      


        return view('beforeLogin.culture', compact('location','atraksiBudaya','festivalBudaya'));
    }

    public function getWisataBudaya2(Request $request){
        $location = $request->query('find'); 
        // Menyebutkan tabel msattractions untuk kolom title
        $atraksiBudaya = Attraction::where('msattractions.destination', $location)  // Gunakan msattractions.title
            ->where('status', 'atraksi')
            ->get();

        $festivalBudaya = Attraction::where('msattractions.destination', $location)  // Gunakan msattractions.title
            ->where('status', 'festival')
            ->get();

      


        return view('afterLogin.culture', compact('location','atraksiBudaya','festivalBudaya'));
    }

    public function getFestivalBudaya(Request $request){

        $festivalTrending = History::join('msttickettypes', 'mshistory.ticket_type_id', '=', 'msttickettypes.id')
            ->join('msattractions', 'msttickettypes.attraction_id', '=', 'msattractions.id')
            ->where('msattractions.status', 'festival')
            ->distinct('msattractions.id')  
            ->select('msattractions.*')
            ->get();

        $festivalTop5 = Attraction::where('rating','>', 4.8) 
            ->where('status', 'festival')
            ->limit(5)
            ->get();
        
        $festivalRecommendation = Attraction::where('status','festival')  
            ->get();


        return view('beforeLogin.festival', compact('festivalTrending','festivalTop5','festivalRecommendation'));
    }

    public function getFestivalBudaya2(Request $request){

        $festivalTrending = History::join('msttickettypes', 'mshistory.ticket_type_id', '=', 'msttickettypes.id')
            ->join('msattractions', 'msttickettypes.attraction_id', '=', 'msattractions.id')
            ->where('msattractions.status', 'festival')
            ->distinct('msattractions.id')  
            ->select('msattractions.*')
            ->get();

        $festivalTop5 = Attraction::where('rating','>', 4.8) 
            ->where('status', 'festival')
            ->limit(5)
            ->get();
        
        $festivalRecommendation = Attraction::where('status','festival')  
            ->get();


        return view('afterLogin.festival', compact('festivalTrending','festivalTop5','festivalRecommendation'));
    }


    public function getAtraksiBudaya(Request $request){

        $atraksiTrending = History::join('msttickettypes', 'mshistory.ticket_type_id', '=', 'msttickettypes.id')
            ->join('msattractions', 'msttickettypes.attraction_id', '=', 'msattractions.id')
            ->where('msattractions.status', 'atraksi')
            ->distinct('msattractions.id')  
            ->select('msattractions.*')
            ->get();

        $atraksiTop5 = Attraction::where('rating','>', 4.8) 
            ->where('status', 'atraksi')
            ->get();
        
        $atraksiRecommendation = Attraction::where('status','atraksi')  
            ->get();


        return view('beforeLogin.atraksi', compact('atraksiTrending','atraksiTop5','atraksiRecommendation'));
    }


    public function getAtraksiBudaya2(Request $request){

        $atraksiTrending = History::join('msttickettypes', 'mshistory.ticket_type_id', '=', 'msttickettypes.id')
            ->join('msattractions', 'msttickettypes.attraction_id', '=', 'msattractions.id')
            ->where('msattractions.status', 'atraksi')
            ->distinct('msattractions.id')  
            ->select('msattractions.*')
            ->get();

        $atraksiTop5 = Attraction::where('rating','>', 4.8) 
            ->where('status', 'atraksi')
            ->get();
        
        $atraksiRecommendation = Attraction::where('status','atraksi')  
            ->get();


        return view('afterLogin.atraksi', compact('atraksiTrending','atraksiTop5','atraksiRecommendation'));
    }


    public function getReviewsByTitle(Request $request)
    {
        $searchQuery = $request->query('find'); 

    }


    public function getItemsByRating()
    {
        $festivalsByRating = Attraction::where('status', 'festival')
            ->where('rating', '>', 4.8)
            ->get();
        
        $attractionsByRating = Attraction::where('status', 'atraksi')
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
