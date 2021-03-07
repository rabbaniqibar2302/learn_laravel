@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-8">
                <h1>{{ $article->title }}</h1>
                <hr>
                <div class="mb-4">
                    {{ $article->content }}
                </div>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#{{ $article->slug }}">
                            delete
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="{{ $article->slug }}" tabindex="-1"
                            aria-labelledby="{{ $article->slug }}Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="{{ $article->slug }}Label">Are you sure</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <form action="{{ route('articles.delete', $article) }}" method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">yes</button>
                                                </form>
                                            </li>
                                            <li class="list-inline-item">
                                                <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">no</button>
                                            </li>
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary" href="{{ route('articles.edit', $article) }}">edit</a>
                    </li>
                    <li class="list-inline-item">
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
