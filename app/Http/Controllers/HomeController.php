<?php

namespace App\Http\Controllers;
use App\Articles;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      
         $article = Articles::all();


        return view('home')->with('articles', $article); 
    }

    public function edit_art()
    {
        return view('edit_art');
    }


    public function create_art()
    {
        return view('create_art');
    }

    public function save_art(Request $request)
    {
        $article = new Articles;

        $article->title = $request->input('title');
        $article->content = $request->input('content');

        $article->save();
       
        return view('save_art');
    }

}
