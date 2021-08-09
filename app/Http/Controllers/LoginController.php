<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\TheUSer;

class LoginController extends Controller
{
    public function login(Request $request){
        $login=$request->get('login');
        $password=$request->get('password');
        $output=TheUser::where('Username',$login)->where('Password',$password)->first();
        $output2=TheUser::where('Username',$login)->where('Password',$password)->pluck('Username');
      
        if (!(is_null($output))) {
            session()->put('logininfo',$output);
            session()->put('partyno',$output2);
            
            return view('main');
        }
        else{
        return view('welcome');
        }
    }
    public function signout(Request $request){

        $request->session()->flush();
        return view('welcome');
    }
}
