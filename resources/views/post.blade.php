@extends('layouts.main')

@section('cont')
    <article class="text-white">
        <h2>{{ $item['title'] }}</h2>
        <h5>{{ $item['author'] }}</h5>
        <p>{{ $item['body'] }}</p>
    </article>

    <a href="/blog">Back to Posts</a>
@endsection
