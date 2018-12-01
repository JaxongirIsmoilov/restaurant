<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('main.index');
    }
    public function listing(){
        return view('main.listing');
    }
public function detail(){
        return view('main.detail');
}
}
