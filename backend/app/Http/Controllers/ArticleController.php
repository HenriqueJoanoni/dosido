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
        usleep(500);
        $articles = Article::all();

        $isAuthenticated = Auth::check();

        $processedArticles = $articles->map(function ($article) use ($isAuthenticated) {
            if ($article->premium && !$isAuthenticated) {
                $article->description = GeneralHelper::str_limit_words($article->description, 4);
            }

            return $article;
        });

        return response()->json($processedArticles, 200);
    }

    public function searchBar(Request $request): JsonResponse
    {
        $search = $request->get('search');

        $articles = Article::where(function ($query) use ($search) {
            $query->where('title', 'like', '%' . $search . '%')
                ->orWhereHas('categories', function ($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%');
                });
        })->get();

        if ($articles) {
            return response()->json($articles, 200);
        }

        return response()->json([], 404);
    }

    public function getArticle(int $id): JsonResponse
    {
        $article = Article::where('id', $id)->first();
        if ($article) {
            return response()->json($article, 200);
        }

        return response()->json([], 404);
    }
}
