<?php

namespace App\Http\Controllers;

use App\Models\RoleUser;

class RoleUserApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RoleUser::find();
    }
}
