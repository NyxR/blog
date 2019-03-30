<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        $title = "About";
        $numbers = [1,2,3,4,5,6,7,8];
        return view('pages/about', compact('title' , 'numbers'));
        
    }
    public function signin(){
        $title = "Sign In";
        return view('pages/signin', compact('title'));
    }
    
    public function admin(){
        $title = "Dashboard";
        return view('pages/admin', compact('title'));
    }
}
