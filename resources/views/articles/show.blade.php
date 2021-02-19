@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-8">
                <h1>{{ $article->title }}</h1>
                <hr>
                    <div class="mb-4">
                        {{ $article->content}}
                    </div>
                <div>
                    <a class="btn btn-primary" href="{{ route('articles.edit', $article)}}">edit</a>
                </div>
            </div>
        </div>
    </div>
@endsection