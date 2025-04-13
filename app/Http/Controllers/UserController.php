<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function index(Request $request){
        // $users = User::paginate(2);

        if(request()->ajax()){
            return User::offset($request->input('limit') * ($request->input('page')-1))->limit($request->input('limit'))->get();
            // return response()->json($users);
        }


        // $users = ['users' => $data];
        return view('intro', compact('users'));
    }
}
