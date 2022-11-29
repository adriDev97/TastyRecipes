<?php

namespace App\Http\Controllers;

use App\Models\RoleUser;
use App\Models\Role;
use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class RoleUserController extends Controller
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
        return RoleUser::all();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roleUsers.create')->with(['roles' => Role::all(), 'users' => User::all()]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['role_id' => 'required', 'user_id' => 'required']);
        RoleUser::create(['role_id' => $request->role_id, 'user_id' => $request->user_id]);
        return redirect()->back()
            ->with('success', 'New category added successfully!');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RoleUser  $roleUser
     * @return \Illuminate\Http\Response
     */
    public function edit(RoleUser $roleUser)
    {
        return view('roleUsers.edit')->with(['roles' => Role::all(), 'users' => User::all(), 'roleUser' => $roleUser]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RoleUser  $roleUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoleUser $roleUser)
    {
        $request->validate(['role_id' => 'required', 'user_id' => 'required']);
        $roleUser->update(['role_id' => $request->role_id, 'user_id' => $request->user_id]);
        return redirect('admin/role')
            ->with('success', 'New role added successfully!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RoleUser  $roleUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoleUser $roleUser)
    {
        $roleUser->delete();
        return redirect()->back()->with('success', 'Role deleted');
    }
}
