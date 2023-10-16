<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\blog_categories;
use App\Models\blog_post_categories;
use App\Models\blog_posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Crm extends Controller
{
  public function index()
  {

    cache()->remember('blog_categories', 30, function () {
      return DB::table('blog_categories')->get();
  });

    $postCategories = blog_categories::all();
    return view('BlogApp.createPost',compact('postCategories'));
  }
}