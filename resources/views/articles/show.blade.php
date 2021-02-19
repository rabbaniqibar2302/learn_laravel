@extends('layouts.master')
@section('title','Create New Article ')
@section('content')

    <div class="container">
        <h1>{{ $article->title }}</h1>
        <a class="btn btn-primary" href="{{ route('articles.edit', $article)}}">edit</a>
    </div>
    <div class="mt-4">
        {{ $article->content}}
    </div>
@endsection