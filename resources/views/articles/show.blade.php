@extends('layouts.master')
@section('title','Create New Article ')
@section('content')

    <div class="container">
        <h1>{{ $article->title }}</h1>
    </div>
    <div>
        {{ $article->content}}
    </div>
@endsection