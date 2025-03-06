<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/articles', [ArticleController::class, 'getAllArticles']);
Route::get('/articles/{id}', [ArticleController::class, 'getArticle']);


Route::post('/article-create', [ArticleController::class,'storeArticle']);
route::patch('/article-update/{id}',[ArticleController::class,'updateArticle']);

Route::get('/categories', [ArticleController::class, 'getAllCategories']);
Route::post('/category-create', [ArticleController::class, 'storeCategory']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/logout', [AuthController::class, 'logout']);

    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
