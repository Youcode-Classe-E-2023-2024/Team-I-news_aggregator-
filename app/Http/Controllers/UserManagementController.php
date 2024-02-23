<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserManagementController extends Controller
{
    /** index page user list */
    public function index()
    {
        $userDataList = User::all();
        return view('usermanagement.userlist',compact('userDataList'));
    }

    /** user view */
    public function userView($user_id)
    {
        $userView = User::where('user_id',$user_id)->first();
        return view('usermanagement.view',compact('userView'));
    }
}

