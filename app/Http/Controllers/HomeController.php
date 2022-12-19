<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
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
                $doctors = Doctor::all();
                return view('user.dashboard',compact('doctors'));
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
        if(Auth::id())
        {
            return redirect()->route('dashboard');
        }
        else{
            $doctors = Doctor::all();
            return view('user.dashboard',compact('doctors'));
        }
    }

}
