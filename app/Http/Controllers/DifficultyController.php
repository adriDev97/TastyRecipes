<?php

namespace App\Http\Controllers;

use App\Models\Difficulty;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class DifficultyController extends Controller
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
        return view('admin.difficulty')->with('difficulties', Difficulty::all());
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['difficulty' => 'required']);
        Difficulty::create(['difficulty' => $request->difficulty]);
        return redirect()->back()
        ->with('success','New diffficulty added successfully!');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Difficulty  $difficulty
     * @return \Illuminate\Http\Response
     */
    public function edit(Difficulty $difficulty)
    {
        return view('difficulties.edit')->with('difficulty', $difficulty);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Difficulty  $difficulty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Difficulty $difficulty)
    {
        $request->validate(['difficulty' => 'required']);
        $difficulty->update(['difficulty' => $request->difficulty]);
        return redirect('admin/difficulty')
        ->with('success','Diffficulty updated successfully!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Difficulty  $difficulty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Difficulty $difficulty)
    {
        $difficulty->delete();     	
        return redirect()->back()->with('success', 'Difficulty deleted successfully.');
    }
}