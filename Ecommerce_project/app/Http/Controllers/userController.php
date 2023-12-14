<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function login(Request $req){
        $users =  User::where(['email' => $req->email])->first();

        if(!$users || !Hash::check($req->password,$users->password)){
            return "Username And Password Not MAtched ";
        }else{
            $req->session()->put('user', $users);
            return redirect('/');
        }
    }

    public function register(Request $req){
        $user = new User;

        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make( $req->password);
        $user->save();

        return redirect('/login');
    }
}
