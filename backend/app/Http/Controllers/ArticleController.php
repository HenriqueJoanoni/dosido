<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getAllArticles()
    {
        $articles = Article::all();

        return response()->json($articles, 200);
    }
    public function searchBar(Request $request)
    {
        $search = $request->get('search');
        $articles = Article::where('title', 'like', '%'.$search.'%')->get();

        return response()->json($articles, 200);
    } 
}
