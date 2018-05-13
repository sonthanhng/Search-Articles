<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Cache;

class ArticlesController extends Controller
{
  public function index() {
    // $articles = Article::all();

    // using cache
    $articles = Cache::remember('articles', 22*60, function() {
        return Article::all();
    });
    return response()->json($articles);
  }
}
