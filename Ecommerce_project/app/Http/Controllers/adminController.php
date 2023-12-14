<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    public function adminLogin(Request $req){
        
        // $get_data = DB::table('admin')->where('admin_email', $req->email)
        // ->where('admin_password', $req->password)->get();
        $get_data = DB::table('admin')->where('admin_email', $req->email)->get();

        if(!$get_data || !Hash::check($req->password,$get_data[0]->admin_password)){
            return "Username And Password Not MAtched ";
        }else{
            $req->session()->put('admin', $get_data);
            return redirect('addproductform');
        }
    }
}
