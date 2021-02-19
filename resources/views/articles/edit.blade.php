@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Edit Article : {{ $article->title }}
                </div>
                <div class="card-body">
                    <form action="{{route('articles.edit', $article)}}" method="post">
                        @csrf
                        <div class="form-group" >
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $article->title }}">
                        </div>
                        <div class="form-group" >
                            <label for="content">Content</label>
                            <textarea name="content" id="content" class="form-control" >{{ $article->content }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-warning">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    @endsection