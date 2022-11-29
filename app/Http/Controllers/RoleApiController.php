<?php

namespace App\Http\Controllers;

use App\Models\Role;

class RoleApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $usersAdmins = Role::find(1)->users;
        return $usersAdmins;
    }
}