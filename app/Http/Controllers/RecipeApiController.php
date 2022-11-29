<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Difficulty;
use App\Models\Recipe;
use App\Models\RecipeUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecipeApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::all();
        // $userLikeRecipes = RecipeUser::where('user_id', $user_id)->get();
        // $userLikeRecipeIds = [];
        // foreach ($userLikeRecipes as $userLikeRecipe) {
        //     $userLikeRecipeIds[] = $userLikeRecipe->recipe_id;
        // }
        // foreach ($recipes as $recipe) {
        //     if (in_array($recipe->id, $userLikeRecipeIds)) {
        //         $recipe->liked = true;
        //     }
        // }
        // dd($userLikeRecipes);
        return $recipes;
    }
}