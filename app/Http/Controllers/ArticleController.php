<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create(){
        return view ('articles.create');
    }
    public function store(){
         $article = new Article();
         $article->title = request('title');
         $article->slug = \Str::slug(request('title'));
         $article->content = request('content');
         $article->save();

         return back();
    }
}
