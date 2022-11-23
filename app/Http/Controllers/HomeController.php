<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{
    // Redirect function
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        if ($usertype === '1') {
            return view('admin.home');
        }else{
            return view('home.userpage');
        }
    }

    // Home Controller
    public function index()
    {
        return view('home.userpage');
    }
}
