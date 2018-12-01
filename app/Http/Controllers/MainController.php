<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('main.index');
    }
    public function listing(){
        $restaurants=Restaurant::all();

        return view('main.listing',compact('restaurants'));
    }

    public function pageShow($id){
        $restaurants = Restaurant::findOrFail($id);
}
public function detail(){
        return view('main.detail');
}
}
