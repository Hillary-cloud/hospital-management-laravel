<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect(){
        if (Auth::id()) {
            if (Auth::user()->user_type=='0') {
                return view('user.index');
            }else {
                return view('admin.index');
            }
        }else {
            return redirect()->back();
        }
    }
    public function index(){
        return view('user.index');
    }
}
