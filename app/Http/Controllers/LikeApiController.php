<?php

namespace App\Http\Controllers;

use App\Models\RecipeUser;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LikeApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RecipeUser::all();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, RecipeUser $recipe_user, Recipe $recipe)
    {
        $like = new RecipeUser();
        $like->recipe_id = $request->recipe_id;
        $like->user_id = $request->user_id;
        $like->save();
        return ['like_id' => $like->id];
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RecipeUser  $recipeUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecipeUser $like)
    {   $like = RecipeUser::find($like->id);
        if(!$like) return ['error' => 'like is not present'];
        $like->delete();
        return ['localLike' => false];
    }
}
