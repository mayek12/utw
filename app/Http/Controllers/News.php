<?php

namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;

class News extends Controller
{
    //
     public function index()
    {
      
        $article = Articles::all();


        return view('welcome')->with('articles', $article); 
    }
}
