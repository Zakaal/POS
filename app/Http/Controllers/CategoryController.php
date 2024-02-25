<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function foodBeverage(){
        return view('category.fb');
    }
    public function beautyHealth(){
        return view('category.bh');
    }
    public function homeCare(){
        return view('category.hc');
    }
    public function babyKid(){
        return view('category.bk');
    }
}
