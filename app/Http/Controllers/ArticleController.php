<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create()
    {
        return view('articles.create');
    }
    public function store()
    {
        // validasi 

        $attr = request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'content' => ['required'],

        ]);

        // $attr ['slug'] = \Str::slug(request('title')) . '-' . \Str::random(10);        
        Article::create($attr);

        return back();
    }

    public function show(Article $article)
    {
        // $article = Article::whereSlug($slug)->first(); tadinya mau dipake , tapi gajadi yadah heheehhehhe
        return view('articles.show', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
        // dd($article);
    }
}
