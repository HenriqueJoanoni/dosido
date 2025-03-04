<?php

namespace App\Http\Controllers;

use App\Helpers\GeneralHelper;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function getAllArticles(): JsonResponse
    {
        $articles = Article::all();

        $isAuthenticated = Auth::check();

        $processedArticles = $articles->map(function ($article) use ($isAuthenticated) {
            if ($article->premium && !$isAuthenticated) {
                $article->description = GeneralHelper::str_limit_words($article->description, 20);
            }

            return $article;
        });

        return response()->json($processedArticles, 200);
    }
}
