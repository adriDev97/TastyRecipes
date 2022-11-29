<?php

use App\Http\Controllers\CategoryController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('recipes', [App\Http\Controllers\RecipeApiController::class, 'index']);
Route::get('categories', [App\Http\Controllers\CategoryApiController::class, 'index']);
Route::apiResource('likes', App\Http\Controllers\LikeApiController::class);
Route::apiResource('comments', App\Http\Controllers\CommentApiController::class);
Route::get('roleAdmin', [App\Http\Controllers\RoleApiController::class, 'index']);