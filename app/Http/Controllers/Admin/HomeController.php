<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use App\Tag;
use App\User;

class HomeController extends Controller
{
    public function index(){
        $postCount = Post::get()->count();
        $categoryCount = Category::get()->count();
        $tagCount = Tag::get()->count();
        $userCount = User::get()->count();

        $posts = Post::take(5)->get();
        $tags =  Tag::take(5)->get();
        $category =  Category::take(5)->get();
        $users =  User::take(5)->get();
      
        return view('admin.home',compact('postCount','categoryCount','tagCount','userCount','posts','tags','category','users'));
    }
}
