<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('article-json', [App\Http\Controllers\Api\ArticleController::class, 'show']);

Route::put('article-views-increment', [App\Http\Controllers\Api\ArticleController::class, 'viewsIncrement']);
Route::put('article-likes-increment', [App\Http\Controllers\Api\ArticleController::class, 'likesIncrement']);

Route::post('article-add-comment', [App\Http\Controllers\Api\CommentController::class, 'store']);

Route::fallback(function() {
    abort(404);
});

