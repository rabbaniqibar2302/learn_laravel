@extends('layouts.master')
@section('title','Beranda')
@section('content')
    
<div class="row">
@foreach ( $articles as $article)
    <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-body">
                <p><a href="/articles/{{ $article->slug }}">{{ $article->title }}</a></p>
                <div>{{ $article->created_at->diffForHumans()}}</div>
            </div>
        </div> 
    </div>
    @endforeach
</div>
    @endsection