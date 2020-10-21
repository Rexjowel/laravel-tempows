<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlConverstion extends Controller
{
    public function home(){

        return view('layouts.home');

    }

    public function service(){
        return view('layouts.services');
    }

    public function portfolio(){

        return view('layouts.portfolio');
    }

    public function team(){

        return view('layouts.team');
    }

    public function contact(){

    }

}
