<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function index(){
        $users = User::paginate(2);
        // $users = ['users' => $data];
        return view('intro', compact('users'));
    }
}
