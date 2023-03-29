<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;   // ne treba nam ni ovo al nek stoji

class HomeController extends Controller
{
    public function index() 
    {
        // $allCategories = ['Category 1', 'Category 2']; //ovo je bilo za probu kao niz, ali ce biti kao objekat
        // $allCategories = DB::table('categories')->get();  // necemo ni ovako
        
        $categories = Category::all();
        $posts = Post::when(request('category_id'), function($query) {   // sa ovom f-ijom ce se videti svi postovi, 
        $query->where ('category_id', request('category_id'));           // a samo ako postoji upit za kategoriju, bice pregled po kategorijama
    })
                ->latest()    // pokazuje nam naj noviji post po datumu
                ->get();



        return view('index', compact('categories', 'posts'));
        //  [ 'categories' => $allCategories,  // ali NE, ima php trik za to kad imamo kljuc
        //    'posts' => $posts  ]);          //  i varijablu sa istim imenom, koristi se metod compact
        
    }
}
