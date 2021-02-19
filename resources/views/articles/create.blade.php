@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h4>Create New Article</h4>
            <hr>

            <form action="{{ route('articles.create')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror">
                    {!! $errors->first('title','<span class="invalid-feedback">:message</span>')!!}
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" class="form-control @error("content") is-invalid @enderror" rows="10"></textarea>
                    {!! $errors->first('content','<span class="invalid-feedback">:message</span>')!!}
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection