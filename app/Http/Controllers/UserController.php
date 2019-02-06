<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
  public function verificar(Request $request){
    if (Auth::attempt(['email'=>$request['email'], 'password'=>$request['pass']])) {
      if (Auth::User()->rol == 'Admin') {
        return redirect('/ixtus#/dashboard');
      }
      return redirect('/ixtus');

    }
    return back();
  }
  public function logout(){
    Auth()->logout();
    return view('login');
  }
}
