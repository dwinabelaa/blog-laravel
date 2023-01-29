@extends('layouts.main')

@section('cont')
    @foreach ($posts as $item)
        <article class="mt-5">
            <a href="/posts/{{ $item['slug'] }}">
                <h2> {{ $item['title'] }}
            </a></h2>
            <h5> {{ $item['author'] }}</h5>
            <p>{{ $item['body'] }}</p>
        </article>
    @endforeach
@endsection
