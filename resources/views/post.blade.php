@extends('layouts.main')

@section('cont')
    <h2>{{ $item['title'] }}</h2>
    <h5>{{ $item['author'] }}</h5>
    <p>{{ $item['body'] }}</p>

    <a href="/blog">Back to Posts</a>
@endsection
