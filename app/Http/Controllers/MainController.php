<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        $tokens = auth()->user()->tokens;

        return view('user.dashboard',compact('tokens'));
    }
}
