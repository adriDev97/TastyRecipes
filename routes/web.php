<?php

use App\Models\Role;
use App\Models\Recipe;
use App\Models\Category;
use App\Models\RecipeUser;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('recipes', App\Http\Controllers\RecipeController::class);
Route::resource('difficulties', App\Http\Controllers\DifficultyController::class);
Route::resource('comments', App\Http\Controllers\CommentController::class);
Route::resource('likes', App\Http\Controllers\LikeController::class);
Route::resource('likeComments', App\Http\Controllers\LikeCommentController::class);
Route::resource('categories', App\Http\Controllers\CategoryController::class);
Route::resource('roles', App\Http\Controllers\RoleController::class);
Route::resource('roleUsers', App\Http\Controllers\RoleUserController::class);
Route::get('admin/recipe', [App\Http\Controllers\AdminController::class, 'recipe']);
Route::get('admin/category', [App\Http\Controllers\AdminController::class, 'category']);
Route::get('admin/difficulty', [App\Http\Controllers\AdminController::class, 'difficulty']);
Route::get('admin/role', [App\Http\Controllers\AdminController::class, 'role']);
Route::get('admin/roleUser', [App\Http\Controllers\AdminController::class, 'roleUser']);
Route::get('aboutUs', function () {
    return view('aboutus');
});
