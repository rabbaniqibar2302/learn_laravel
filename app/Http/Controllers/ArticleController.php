<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Cache\RedisTaggedCache;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        $articles = Article::latest()->paginate(9);
        return view('articles.index', compact('articles'));
    }
    public function create()
    {
        return view('articles.create');
    }
    public function store(Article $article)
    {
        // validasi 

        $attr = request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'content' => ['required'],

        ]);

        $attr['slug'] = \Str::slug(request('title')) . '-' . \Str::random(10);
        Article::create($attr);

        return redirect()->route('articles', $article);
    }


    public function show(Article $article)
    {
        
        return view('articles.show', compact('article'));
        

    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
        // dd($article);
    }

    public function update(Article $article)
    {
        $attr = request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'content' => ['required'],

        ]);

        $attr['slug'] = \Str::slug(request('title')) . '-' . \Str::random(10);
        $article->update($attr);

        return redirect()->route('articles.show', $article);
    }
    public function destroy(Article $article)
    {
        $article->delete();


        return redirect()->route('articles');
    }
}
