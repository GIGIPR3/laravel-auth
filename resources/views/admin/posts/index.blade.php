@extends('layouts.dashboard')
@section('content')

<h1>pagina dei post</h1>
    @foreach ($posts as $post)
        {{ $post->title }}
    @endforeach
@endsection
