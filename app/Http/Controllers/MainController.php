<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $restaurants=Restaurant::all();
        return view('main.index',compact('restaurants'));
    }
    public function listing(){
        $restaurants=Restaurant::all();

        return view('main.listing',compact('restaurants'));
    }

    public function pageShow($id){
        $restaurants = Restaurant::findOrFail($id);
}
public function detail(){
    $restaurants=Restaurant::all();
        return view('main.detail',compact('restaurants'));
}

public function cafeView($id){
    $restaurants = Restaurant::findOrFail($id);
    return view('main.cafe_view',compact('restaurants'));

}
}
