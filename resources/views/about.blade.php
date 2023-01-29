@extends('layouts.main')

@section('cont')
    <div class="text-center">
        <h1>Halaman About</h1>
        <h3>{{ $name }}</h3>
        <p>{{ $email }}</p>
        <img src="{{ $image }}" alt="{{ $name }}" width="200" class="rounded-5">
    </div>
@endsection
