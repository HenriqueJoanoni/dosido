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
    public function getAllArticles(Request $request): JsonResponse
    {
        usleep(500);
        $isAuthenticated = Auth::check();
        $searchTerm = $request->query('search');
        $query = Article::with('categories');

        if ($searchTerm) {
            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'like', "%{$searchTerm}%")
                    ->orWhereHas('categories', function ($q) use ($searchTerm) {
                        $q->where('name', 'like', "%{$searchTerm}%");
                    });
            });
        }

        $articles = $query->get();

        $processedArticles = $articles->map(function ($article) use ($isAuthenticated) {
            if ($article->premium && !$isAuthenticated) {
                $article->description = GeneralHelper::str_limit_words($article->description, 4);
            }
            return $article;
        });

        return response()->json($processedArticles, 200);
    }

    public function getArticle(int $id): JsonResponse
    {
        $article = Article::where('id', $id)->first();
        if ($article) {
            return response()->json($article, 200);
        }

        return response()->json([], 404);
    }

    public function storeArticle(Request $request): JsonResponse
    {
        $article = Article::create([
            'image' => $request->image,
            'title' => $request->title,
            'description' => $request->description,
            'date' => now(),
            'categories' => $request->categories,
            'premium' => $request->premium,
        ]);

        return response()->json($article, 201);
    }

    public function updateArticle(Request $request, int $id): JsonResponse
    {
        $article = Article::find($id);
        if ($article) {
            $article->update([
                'image' => $request->image,
                'title' => $request->title,
                'description' => $request->description,
                'date' => now(),
                'categories' => $request->categories,
                'premium' => $request->premium,
            ]);
            return response()->json($article, 200);
        }
        return response()->json(['message' => 'Article not found'], 404);
    }
}
