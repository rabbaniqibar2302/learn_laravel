@extends('layouts.master')
@section('title','Beranda')
@section('content')
    @foreach ($articles as $article)
        <p>{{ $article->title }}</p>
    @endforeach
@endsection