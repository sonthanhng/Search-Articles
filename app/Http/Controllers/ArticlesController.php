<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Cache;

class ArticlesController extends Controller
{
  public function index() {
    return view('article');
  }

  public function find($value) {
    // using cache
    $key = 'articles_'.$value;
    // $articles = Cache::get($key);
    $articles = Cache::remember($key, 22*60, function() use ($value) {
        return Article::where('title', 'LIKE', '%'.$value.'%')->get();
    });
    return response()->json($articles);
  }
}
