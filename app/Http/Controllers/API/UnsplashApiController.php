<?php

namespace App\Http\Controllers\API;
use App\Services\Unsplash\UnsplashApiServices;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UnsplashApiController extends Controller
{
    public function show()
    {
        $unsplash = new UnsplashApiServices();
        $randomPhoto = $unsplash->random();

        return view('about')
        ->with('randomPhoto', $randomPhoto["urls"],["regular"]);
    }
  

    
    
    
    
    
    
    //primer za javni api bez kljuca
            //public function getMakeup($response)
            //{
            //$response = Http::get('http://makeup-api.herokuapp.com/api/v1/products.json');
            //$jsonData = $response->json();
            //return $jsonData;
            //}  
}