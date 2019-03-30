<?php

namespace App\Http\Controllers;

use App\Link;
use App\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class LinksController extends Controller
{

    public function show($id){
        $link = Link::findOrFail($id);
        return new redirect($link->url, 301);
    }
    public function create(){
        return view('links/create');
    }

    public function store(){
        $url = Input::get('url');
        $link = Link::firstOrCreate(['url' => $url]);
        return view('links.success', compact('link'));
    }
    
    
}
