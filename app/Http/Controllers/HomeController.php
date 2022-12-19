<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    ## Redirect admin and user page ##
    public function redirect()
    {
        if (Auth::id()) {
            if(Auth::user()->role == '0')
            {
                return view('user.dashboard');
            }else{
                return view('admin.dashboard');
            }
        } else {
            return redirect()->back();
        }
    }
    ## show index view page frontend
    public function index()
    {
        return view('user.dashboard');
    }

}
