<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $articles = Article::limit(6)->get();
        return view ('home', compact('articles'));
    }
}
