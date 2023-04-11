<?php

namespace App\Services\Unsplash;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UnsplashApiServices
{
    private string $baseUrl= "https://api.unsplash.com/";

    private string $apiToken = '';
    public function __construct()
    {
        $this->apiToken = config(key:'app.unsplash_api_key');
    }
    

    // vratice nam neku random sliku iz javnog apija
    public function random(): array
    {
        $url = $this->baseUrl . "/photos/random"; 

        
        return Http::get($url, [
            'client_id' => $this->apiToken
        ])->json();

    }

    // pretraga svih fotografija putem publik api
    public function search(string $query): array
    {
       // to je ustvari https://api.unsplash.com/search/photos
       $url = $this->baseUrl . "/search/photos";    

        $response = Http::get($url, [
            'query' => $query,
            'per_page' => 10,
            'client_id' => 'U4xej9sEJs0BIYB2X2EWO4LyxW67qs-LiCUUewrnzPo'
        ])->json();

        return $response ['results'];
    }
}