<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Difficulty;
use App\Models\Recipe;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the form for creating a new resource and the existing list.
     *
     * @return \Illuminate\Http\Response
     */
    public function recipe()
    {
       return view('admin.recipe')->with(['categories' => Category::all(), 'difficulties' => Difficulty::all(), 'recipes' => Recipe::all()]);
    }

    public function category()
    {
       return view('admin.category')->with(['categories' => Category::all()]);
    }

    public function difficulty()
    {
       return view('admin.difficulty')->with(['categories' => Category::all(), 'difficulties' => Difficulty::all(), 'recipes' => Recipe::all()]);
    }
    public function role()
    {
       return view('admin.role')->with(['roles' => Role::all()]);
    }
    public function roleUser()
    {
       return view('admin.roleUser')->with(['roles' => Role::all(), 'users' => User::all(), 'roleUsers' => RoleUser::all()]);
    }
}
