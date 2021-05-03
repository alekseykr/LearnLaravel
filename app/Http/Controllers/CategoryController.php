<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category($slug){
        $category=Category::with("posts")->where('slug',$slug)->first();

     return view("categorymore",["category"=>$category,"posts"=>$category->posts()->paginate(10)]);
    }
}
