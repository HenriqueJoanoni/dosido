<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getBio()
    {
        $bios = Article::all();

        // dd($bios);

        return response()->json($bios,200);
    }
}
