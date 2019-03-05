@extends('layout')

@section('content')
    <div class="content">
        <div class="">
            Artworks
        </div>
    </div>

    @foreach(artworks as item)
    {{ item.artist }}
    @endforeach

@endsection