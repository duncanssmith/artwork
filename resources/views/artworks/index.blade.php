@extends('layout')

@section('content')
    <div class="content">
        <div class="">
            Artworks
        </div>
    </div>

    <ul>
    @foreach ($artworks as $artwork)
        <li>
            {{ $artwork->title }},
            {{ $artwork->artist }},
            {{ $artwork->medium }}
        </li>
    @endforeach
    </ul>

@endsection