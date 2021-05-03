<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $posts=Post::with('category')->orderByDesc('id')->paginate(10);
        return view("home",["posts"=>$posts]);
    }
    public function about(){
        return view("about");
    }
    public function faqs(){
    return view("faqs");
}
    public function category(){
        $category=Category::all();
        return view("category",["category"=>$category]);
    }
    public function pricing(){
        return view("pricing");
    }
}
