<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\CommentUser;
use App\Models\Difficulty;
use App\Models\Recipe;
use App\Models\RecipeUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Recipe::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipes.create')->with(['difficulties' => Difficulty::all(), 'categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recipe = new Recipe;

        $request->validate([
            'name' => ['required', 'min:3', 'max:26'],
            'prep_time' => 'required',
            'cook_time' => 'required',
            'serving' => 'required',
            'ingredient1' => 'required',
            'ingredient2' => 'required',
            'ingredient3' => 'required',
            'ingredient4' => 'required',
            'preparation' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'difficulty_id' => 'required',
            'category_id' => 'required',
        ]);

        if ($request->image) {
            $name = uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('images/recipes'), $name);
            $recipe->image = $name;
        }
        $recipe->name = $request->name;
        $recipe->prep_time = $request->prep_time;
        $recipe->cook_time = $request->cook_time;
        $recipe->serving = $request->serving;
        $recipe->ingredient1 = $request->ingredient1;
        $recipe->ingredient2 = $request->ingredient2;
        $recipe->ingredient3 = $request->ingredient3;
        $recipe->ingredient4 = $request->ingredient4;
        $recipe->ingredient5 = $request->ingredient5;
        $recipe->ingredient6 = $request->ingredient6;
        $recipe->ingredient7 = $request->ingredient7;
        $recipe->ingredient8 = $request->ingredient8;
        $recipe->ingredient9 = $request->ingredient9;
        $recipe->ingredient10 = $request->ingredient10;
        $recipe->ingredient11 = $request->ingredient11;
        $recipe->ingredient12 = $request->ingredient12;
        $recipe->ingredient13 = $request->ingredient13;
        $recipe->ingredient14 = $request->ingredient14;
        $recipe->ingredient15 = $request->ingredient15;
        $recipe->ingredient16 = $request->ingredient16;
        $recipe->ingredient17 = $request->ingredient17;
        $recipe->ingredient18 = $request->ingredient18;
        $recipe->ingredient19 = $request->ingredient19;
        $recipe->ingredient20 = $request->ingredient20;
        $recipe->preparation = $request->preparation;
        $recipe->tip = $request->tip;
        $recipe->note = $request->note;
        $recipe->difficulty_id = $request->difficulty_id;
        $recipe->category_id = $request->category_id;
        $recipe->user_id = $request->user()->id;
        $recipe->save();
        // if (count(Auth::user()->roles) && Auth::user()->roles[0]->role == 'Admin') {
        //     return redirect()->back()->with('success', 'Recipe posted successfully!');
        // }
        return redirect()->route('home')
            ->with('success', 'Recipe posted successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        $commentUsers = CommentUser::all();
        $recipe_users = RecipeUser::all();
        $user = Auth::user()->id;
        $like = null;
        foreach ($recipe_users as $like_recipe) {
            // user uguale a user_id della tabella recipe_user e la recipe id e usuale alla recipe_id nella tabella recipe_user
            if ($user == $like_recipe->user_id && $recipe->id == $like_recipe->recipe_id) {
                $like = $like_recipe;
                break;
            }
        }
        foreach($commentUsers as $commentLike) {
            if ($user == $commentLike->user_id && $recipe->id == $commentLike->recipe_id) {
                $like_comment = $commentLike->user;
                break;
            }
        }
        return view('recipes.show')->with(['recipe' => Recipe::find($recipe->id), 'comments' => Comment::all(), 'comment_users' => CommentUser::all(), 'like' => $like, 'user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        return view('recipes.edit')->with(['recipe' => Recipe::find($recipe->id), 'difficulties' => Difficulty::all(), 'categories' => Category::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        $request->validate([
            'name' => ['required', 'min:3', 'max:26'],
            'prep_time' => 'required',
            'cook_time' => 'required',
            'serving' => 'required',
            'ingredient1' => 'required',
            'ingredient2' => 'required',
            'ingredient3' => 'required',
            'ingredient4' => 'required',
            'preparation' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'difficulty_id' => 'required',
            'category_id' => 'required',
        ]);

        if ($request->image) {
            $name = uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('images/recipes'), $name);
            $recipe->image = $name;
        }
        $recipe->name = $request->name;
        $recipe->prep_time = $request->prep_time;
        $recipe->cook_time = $request->cook_time;
        $recipe->serving = $request->serving;
        $recipe->ingredient1 = $request->ingredient1;
        $recipe->ingredient2 = $request->ingredient2;
        $recipe->ingredient3 = $request->ingredient3;
        $recipe->ingredient4 = $request->ingredient4;
        $recipe->ingredient5 = $request->ingredient5;
        $recipe->ingredient6 = $request->ingredient6;
        $recipe->ingredient7 = $request->ingredient7;
        $recipe->ingredient8 = $request->ingredient8;
        $recipe->ingredient9 = $request->ingredient9;
        $recipe->ingredient10 = $request->ingredient10;
        $recipe->ingredient11 = $request->ingredient11;
        $recipe->ingredient12 = $request->ingredient12;
        $recipe->ingredient13 = $request->ingredient13;
        $recipe->ingredient14 = $request->ingredient14;
        $recipe->ingredient15 = $request->ingredient15;
        $recipe->ingredient16 = $request->ingredient16;
        $recipe->ingredient17 = $request->ingredient17;
        $recipe->ingredient18 = $request->ingredient18;
        $recipe->ingredient19 = $request->ingredient19;
        $recipe->ingredient20 = $request->ingredient20;
        $recipe->preparation = $request->preparation;
        $recipe->tip = $request->tip;
        $recipe->note = $request->note;
        $recipe->difficulty_id = $request->difficulty_id;
        $recipe->category_id = $request->category_id;
        $recipe->user_id = $request->user()->id;
        $recipe->save();
        return redirect()->route('home')->with('success', 'Recipe updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
        return redirect()->route('home')->with('success', 'Recipe deleted successfully.');
    }
}