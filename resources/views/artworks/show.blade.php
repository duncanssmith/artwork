@extends('layout')

@section('content')
    @section('banner')

    <h1 class="title">{{ $artwork->title }}</h1>
    <div class="content">{{ $artwork->description }}</div>
    <p>
    <button href="/artworks/{{ $artwork->id }}/edit">Edit</button>
    </p>

    @endsection
@endsection