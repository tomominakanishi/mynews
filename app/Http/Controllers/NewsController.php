<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
  public function index(Request $request)
  {
    $posts = News::all()->sortByDesc('updated_at');

    if (cunt($posts) > 0){
      $headline = $posts->shift();
    } else {
      $headline = null;
    }
    return view('news.index', ['headline' => $headline, 'posts' => $posts]);
  }
}
