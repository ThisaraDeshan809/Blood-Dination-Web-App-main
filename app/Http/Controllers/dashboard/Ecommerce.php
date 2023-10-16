<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\blog_posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Ecommerce extends Controller
{
    public function index(){


      cache()->remember('blog_posts', 30, function () {
        return DB::table('blog_posts')->get();
    });

      $posts = blog_posts::all();
      return view('BlogApp.updatePost',compact('posts'));
    }
}