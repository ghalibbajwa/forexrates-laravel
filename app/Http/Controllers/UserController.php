<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('users.users', ['users' => $user]);
    }

    public function change_status($status,Request $request)
    {
        if($request->id){
            $user = User::where("id",$request->id)->update([
                "status" => $status == "active" ? 1 : 0
            ]);
        }
        return back();
    }
}
