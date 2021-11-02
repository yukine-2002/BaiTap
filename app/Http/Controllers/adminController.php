<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    public function adminDB()
    {
       return view('admin.index');
    }
    public function adminLogin(Request $request){
        $arr = [
            'email' => $request->Email,
            'password' => $request->Password,
        ];
     
        if (Auth::attempt($arr)) {
            return redirect('adminDB'); 
        } else {
            return view('admin.login') -> with('error','login thất bại');
        }
    }
}
